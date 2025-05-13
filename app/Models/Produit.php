<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
   public function categorie()
{
    return $this->belongsTo(Categorie::class, 'id_categorie');
}

public function ligneCommandes()
{
    return $this->hasMany(LigneCommande::class, 'id_produit');

}

}
