<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\http\request;



class liste_attent extends Model 
{
 

    protected $fillable = ['nom', 'prenom', 'email', 'date_d', 'date_f'];

   
}