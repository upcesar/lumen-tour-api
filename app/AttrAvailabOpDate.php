<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class AttrAvailabOpDate extends Model
{
     
     protected $fillable = ['id', 'attr_availability_id', 'attr_op_from', 'attr_op_to'];
     protected $hidden = ['created_at', 'updated_at'];
     
     public function availability() {
         return $this->belongsTo('App\AttractionsAvailabilities');
     }
     
}
