<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function formulaire()
    {
        return view('reserver');
    }


    public function traitement()
    {


        //Condition 
        request()->validate([
            'date_d'=> ['required', 'date', 'date_format:d-m-Y','after:start_at'],
            'date_f'=> ['required', 'date', 'date_format:d-m-Y','after:start_at'],

        ]);
                

        //BDD
        $liste_att =  \App\demandes::create([
            'client_id' => auth()->user()->nom,
            'date_d' => request('date_d'),
            'date_f' => request('date_f'),
           
        ]);

       flash("Votre réservation a été pris en compte")->success();

    return redirect('/mon-compte');

    }

    public function traitement2()
    {
        //BDD
        $liste_att =  \App\demandes::create([
            'client_id' => auth()->user()->id,
            'date_d' => request('date_d'),
            'date_f' => request('date_f'),
        ]);

       flash("Votre réservation a été pris en compte")->success();

    return redirect('/mon-compte');

    }


                    

    
}
