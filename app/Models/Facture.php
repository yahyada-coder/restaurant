<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
     public function commandes()
    {
        return $this->belongsTo(Commande::class);
    }
}
