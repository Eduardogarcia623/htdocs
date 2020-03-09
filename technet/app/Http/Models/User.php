<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'persona';

    public function users()
    {
        return $this->hasMany('App\UserController');

    }


}

