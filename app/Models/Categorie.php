<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'libele_categorie',
    ];
    public function produit()
    {
        return $this->hasMany(Produit::class);
    }
}
