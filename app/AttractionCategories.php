<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class AttractionCategories extends Model
{
     
     protected $fillable = ['id', 'description'];
     protected $hidden = ['created_at', 'updated_at'];
     
     public function attractions() {
         return $this->hasMany('App\Attractions');
     }
     
}
