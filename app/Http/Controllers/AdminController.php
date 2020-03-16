<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page ADMIN")->error();
            return redirect('/connexion');
        }


        return view('espace-admin');


        
           
    }

}
