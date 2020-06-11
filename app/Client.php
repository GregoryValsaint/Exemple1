<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //désigner les champs modifiables
    protected $fillable = ['nom', 'prenom', 'telephone', 'email'];
}
