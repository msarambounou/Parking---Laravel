<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\http\request;



class places extends Model 
{
 

    protected $fillable = ['libelle', 'date_d', 'date_f', 'disponible', 'date_f'];

   
}