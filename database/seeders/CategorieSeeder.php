<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'libele_categorie' => 'Fruit',
        ]);
        Categorie::create([
            'libele_categorie' => 'Jus',
        ]);
    }
}
