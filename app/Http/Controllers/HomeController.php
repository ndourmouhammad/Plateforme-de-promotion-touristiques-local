<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Accueil
    public function accueil()
    {
        $lieux = Lieu::all();
        return view('accueil.accueil', compact('lieux'));
    }
}
