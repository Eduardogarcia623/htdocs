<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Modulo;


class ModuloController extends Controller{

    public function index(){
        $Modulo  = Modulo::all();
    }
}
