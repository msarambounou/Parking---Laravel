<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriquesController extends Controller
{
    public function voirhistorique()
    {

        $clients = DB::table('liste_attents')
                ->select('id','nom','prenom', 'date_d', 'date_f', 'email')
                ->where('email', '=', auth()->user()->email )
                ->get();
    }
}
