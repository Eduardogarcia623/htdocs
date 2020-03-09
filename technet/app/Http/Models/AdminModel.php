<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model {
    protected $table = 'persona';

    public function admins()
    {
        return $this->hasMany('App\AdminController');

    }


}



