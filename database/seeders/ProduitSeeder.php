<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'libele_produit' => 'orange',
            'image' => 'https://www.lesproduitsnaturels.com/userfiles/www.lesproduitsnaturels.com/images/orange.jpg',
            'prix' => '1200',
            'description' => 'bnshjsdhjshjshjshshdhhh',
            'libele_categorie' => 'Fruit',
        ]);
        Produit::create([
            'libele_produit' => 'Dafani',
            'image' => 'https://vishop-bf.com/wp-content/uploads/2021/04/jus-dafanie.png',
            'prix' => '12000',
            'description' => 'Dafani mangue bon gout',
            'libele_categorie' => 'Jus',
        ]);
    }
}
