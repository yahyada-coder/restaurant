<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
    public function Facture(){
        return $this->belongsTo(Facture::class);
    }
    public function Table(){
        return $this->belongsTo(Table::class);
    }
}
