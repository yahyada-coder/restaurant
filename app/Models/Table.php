<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    
     public function commandes()
    {
        return $this->belongsTo(Commande::class);
    }
}
