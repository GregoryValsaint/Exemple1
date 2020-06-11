<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //désigner les champs modifiables
    protected $fillable = ['commande'];

    //fonction pour récupérer la liste des commandes
    public function commandes(){
        return $this->belongsTo(Client::class);
    }
}
