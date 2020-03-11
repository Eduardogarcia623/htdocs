<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

     public function personas(){
         return $this->belongsToMany('App\Persona');

     }
     public function modulos(){
         return $this->belongsToMany('App\Modulo');
     }


}
