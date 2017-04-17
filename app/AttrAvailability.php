<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class AttrAvailability extends Model
{
     
     protected $fillable = ['id', 'attraction_id', 'code', 'name', 'contract', 'iso_currency', 'service_price'];
     protected $hidden = ['created_at', 'updated_at'];
     
     public function attraction() {
         return $this->belongsTo('App\Attractions');
     }
     
     public function operation_dates() {
         return $this->hasMany('App\AttrOperationDates');
     }
     
}
