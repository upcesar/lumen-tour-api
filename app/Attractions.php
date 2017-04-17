<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;

class Attractions extends Model
{
     
     protected $fillable = ['id', 'destination', 'code', 'attr_cad_id', 'name', 'description', 'imagheThumbs', 'imagheFull'];
     protected $hidden = ['created_at', 'updated_at'];
     
     public function category() {
        return $this->belongsTo('App\AttrCategories','attr_cat_id');
     }
     
     public function availabilities() {
        return $this->hasMany('App\AttrAvailability', 'attraction_id');
     }
     
     public function operation_dates() {
        return $this->hasManyThrough('App\AttrOperationDates', 'App\AttrAvailability',
                                     'attraction_id', 'attr_availability_id', 'id');
     }
}
