<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function view($page = 'home')
    {
        // ...
    }
}