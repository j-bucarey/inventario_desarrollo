<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Preventivo solamente para crear proyecto , 
        return view('login/login');

        // return view ('proyecto/listar');
    }
}
