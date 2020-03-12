<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

    protected $table = 'perfil';


     public function personas(){
         return $this->belongsToMany('App\Persona', 'persona_perfil');

     }
     public function modulos(){
         return $this->belongsToMany('App\Modulo', 'modulo_perfil');
     }


}
