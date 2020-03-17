<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Persona;



class PersonaController extends Controller{

    public function index()
    {
        $consulta = Persona::with(['perfiles.modulos'])->get();
        return view('login')->with('consulta',$consulta);

    }
   public function ingreso()
   {
       $persona = new persona();

       $persona -> nombre_usuario = $_REQUEST -> $nombre_usuario;
       $persona -> contrasena = $_REQUEST -> $contrasena;

       if (Auth::attempt(['nombre_usuario' => $nombre_usuario, 'contrasena' => $contrasena, ])) {
           // The user is active, not suspended, and exists.
           return redirect()->intended('login');
       }

}

}


