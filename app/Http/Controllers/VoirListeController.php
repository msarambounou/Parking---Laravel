<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoirListeController extends Controller
{
    public function voirliste()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecté pour voir la page VOIR-LISTE-ATTENTE")->error();
            return redirect('/connexion');
        }

        
        $client = \App\liste_attent::all();

        return view('voir-liste-attente', [
            'clients' => $client,
        ]);
        
    }

    public function voirhistorique()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecté pour voir la page HISTORIQUE")->error();
            return redirect('/connexion');
        }

        
        $client = \App\liste_attent::all();

        return view('historique-client', [
            'clients' => $client,
        ]);
        
    }
}
