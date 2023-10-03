<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;

class HomeController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function adminhome()
    {
        $produit = Produit::count();
        $categorie = Categorie::count();

        return view('back-office.adminhome', [
            'produit' => $produit,
            'categorie' => $categorie,
        ]);
    }
    public function accueil()
    {
        $produit = Produit::all();
        $categories = Categorie::all();
        return view('front-office.accueil', compact('produit', 'categories'));
    }
}
