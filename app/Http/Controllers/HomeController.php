<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodos
    public function __invoke()
    {
        // return "Bienvenido";
        return view('home');
    }
}
