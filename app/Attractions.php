<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Attractions extends Model
{
     
     protected $fillable = ['id', 'destination', 'code', 'attr_cad_id', 'name', 'description', 'imagheThumbs', 'imagheFull'];
     protected $hidden = ['created_at', 'updated_at'];
     
     public function category() {
         return $this->belongsTo('App\class AttractionCategories');         
     }     
}
