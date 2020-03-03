<?php

namespace app\controllers;

use app\models\User;
use \Controller;
use \Response;


class HomeController extends Controller
{
    public function actionIndex($id)
    {
        $user = User:: where("name", "Eduardo garcia") ->first();
       Response::render("home", ["name" => $user->name, "age" => $user->age, "email" => $user->email]);
    }
    public function actionAbout($id,$name)
    {
        echo "hola desde acerca de id: ".$id." nombre: ".$name;
    }
}
