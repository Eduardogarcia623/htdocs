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

        $consulta = DB::table('persona')->get();

    }

    public function index()
    {
        $consulta = Persona::with(['perfiles.modulos'])->get();
        return view('login')->with('consulta',$consulta);
    }

}
