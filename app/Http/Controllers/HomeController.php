<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Accueil
    public function accueil()
    {
        return view('accueil.accueil');
    }
}
