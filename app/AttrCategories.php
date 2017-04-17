<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class AttrCategories extends Model
{
     
     protected $fillable = ['id', 'description'];
     protected $hidden = ['created_at', 'updated_at'];
     
     public function attractions() {
         return $this->hasMany('App\Attractions', 'attr_cat_id');
     }
     
}
