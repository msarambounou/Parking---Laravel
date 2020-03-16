<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function voirhistorique()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecté pour voir la page HISTORIQUE")->error();
            return redirect('/connexion');
        }

        
        $client = \App\historique::all();

        return view('historique-client', [
            'clients' => $client,
        ]);
    }
}
