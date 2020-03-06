<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\AdminModel;


class AdminController extends Controller
{
public function create (Request $request){
    $persona = new persona();

    $persona -> ID_persona = $request -> ID_persona;
    $persona -> nombre_usuario = $request -> nombre_usuario;
    $persona -> contrasena = $request -> contrasena;
    $persona -> nombre_persona = $request -> nombre_persona;
    $persona -> CC = $request -> CC;
    $persona -> email = $request -> email;
    $persona -> edad = $request -> edad;
    $persona -> save();

    return redirect("/create");

}


}
