<?php

use App\perfil;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $perfil = new perfil();
        $perfil->name = 'admin';
        $perfil->description = 'Administrator';
        $perfil->save();

        $perfil = new perfil();
        $perfil->name = 'user';
        $perfil->description = 'User';
        $perfil->save();
    }
}
