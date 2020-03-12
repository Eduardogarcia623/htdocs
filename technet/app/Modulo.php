<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model {

    protected $table = 'modulo';

    public function perfiles()
    {
        return $this->belongsToMany('App\Perfil');
    }
}
