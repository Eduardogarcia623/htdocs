<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

    public function perfiles(){
        return $this->belongsToMany('App\Perfil');
    }

}
