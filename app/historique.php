<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\http\request;



class historique extends Model 
{
 

    protected $fillable = ['nom', 'prenom', 'email', 'date_d', 'date_f'];

   
}