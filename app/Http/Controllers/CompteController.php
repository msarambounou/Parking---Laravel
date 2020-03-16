<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page MON COMPTE")->error();
            return redirect('/connexion');
        }

        return view('mon-compte');
        
           
    }

    public function accueil2()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page MON COMPTE")->error();
            return redirect('/connexion');
        }

        return view('mon-compte2');
        
           
    }


    public function deconnexion()
    {
        auth()->logout();

        flash("Vous êtes maintenant déconnecté")->success();

        return redirect('/');
    }

   

}
