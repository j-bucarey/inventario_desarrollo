<?php

namespace App\Controllers\registro;
use Codeigniter\Controller;
use App\Models\UserModel;

class Add extends Controller
{
    public function index()
    {
        print_r("add hola");
    }
    public function save(){
        $userModel = new UserModel();

        $data = [
            "name" => "prueba",
            "email"=> "aaaj@gmail",
            "biography"=> "jssjkas"
        ];
    }
}
