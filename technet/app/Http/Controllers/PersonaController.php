<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Persona;


class PersonaController extends Controller{
    public function select(){
        $persona = DB::table('persona')->get();


    }

}
