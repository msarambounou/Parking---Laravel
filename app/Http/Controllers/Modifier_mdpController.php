<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modifier_mdpController extends Controller
{
    public function formulaire()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecté pour voir la page MODIFIER-PASSWORD")->error();
            return redirect('/connexion');
        }

        return view('modifier-password');
    }

    public function traitement()
    {
        //------  Condition de validité   -------------------- 
        request()->validate([
        'password' => ['required', 'min:8', 'confirmed'],
        'password_confirmation' => ['required'],
        ],  [
            'password.min' => 'Pour des raison de sécurité, votre mot de passe doit faire :min caractères'
        ]);

         
        // modif
        \App\clients::table('clients')
            ->where('mdp', auth()->user())
            ->update(['mdp' => $password]);

        flash("Modification de mot de passe reussit")->succes();

 
    }
}
