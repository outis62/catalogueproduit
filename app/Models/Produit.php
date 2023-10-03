<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory, HasUuids;
    protected $filliable = [
        'libele_produit',
        'image',
        'prix',
        'description',
        'libele_categorie',
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
