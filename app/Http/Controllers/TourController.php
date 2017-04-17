<?php

namespace App\Http\Controllers;

use App\Attractions;
use Illuminate\Http\Request;


class TourController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function fetchRemoveElement($arrayElement) {
        foreach ($arrayElement as $element) {
            $element = $this->removeFields($element);
        }
        return $arrayElement;        
    }
    
    private function removeFields($data){
        
        $remove_fields = array('id', 'category', 'attr_cat_id', 'availabilities', /*'operation_dates', */ 'attraction_id', 'attr_availability_id', 'iso_currency');
        
        foreach ($remove_fields as $field) {
            if(is_array($data)){
                $data = $this->fetchRemoveElement($data);
            }
            else if (isset($data->$field)){
                unset($data->$field);
            }
            
        }
        
        return $data;
    }
    
    public function search(Request $request) {

        
        $tour_result = Attractions::with('category')
                            ->with(['availabilities' => function($query) use ($request){
                                $query->where('iso_currency', $request->Currency);
                            }])
                            ->with(['operation_dates' => function($query) use ($request) {
                                
                                $dateFrom = date('Y-m-d', strtotime($request->DateFrom));
                                $dateTo = date('Y-m-d', strtotime($request->DateTO));
                                
                                $query->whereBetween('attr_op_from', [$dateFrom, $dateTo]);
                            }])
                            ->get();

                            
        $fields_order = array('destination', 'code', 'classification', 'name', 'description', 'imageThumbs', 'imageFull', 'availableModality');
        
        $tour = array();
        
        foreach ($tour_result as $t) {
            
            foreach ($t->availabilities as $avlt) {
                $avlt->operationDateList = $this->removeFields($t->operation_dates);
                $avlt = $this->removeFields($avlt);
            }
            
            $t->classification = $t->category->description;
            $t->availableModality = $t->availabilities;
            
            $row = new \stdClass();            

            foreach ($fields_order as $index => $field) {
                $row->$field = $t->$field;                
            }
            
            $t = $this->removeFields($t);            
            
            $tour[] = $row;
            
        }        
                
        return $this->success($tour, 200);
    }
}
