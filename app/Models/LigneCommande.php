<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
  
public function produit()
{
    return $this->belongsTo(Produit::class, 'id_produit');
}

}
