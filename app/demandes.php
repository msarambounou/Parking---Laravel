<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    protected $fillable = ['client_id','date_d', 'date_f'];

    public function client()
    {
        return $this->hasOne(client::class);
    }
}
