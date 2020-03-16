<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Query\Builder;

class liste_attenteController extends Controller
{
    public function liste_attent()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecté pour voir la page LISTE D'ATTENTE")->error();
            return redirect('/connexion');
        }

        
        $client = \App\liste_attent::all();

        return view('liste-attente', [
            'clients' => $client,
        ]);

    }


    public function attribution()
    {
        $client =  \App\places::insert([
            'libelle' => request('date_d'),
           'date_d' => request('date_d'),
            'date_f' => request('date_f'),
        ]);

    }

    public function voirhistorique()
    {
        $demandes = \App\demandes::where('client_id', auth()->user()->id)->get();
        return view('historique-client', [
            'demandes' => $demandes,
        ]);
          
    }
}
