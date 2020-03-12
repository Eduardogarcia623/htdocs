<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

    protected $table = 'persona';

    public function perfiles(){
        return $this->belongsToMany('App\Perfil', 'persona_perfil');
    }

}
