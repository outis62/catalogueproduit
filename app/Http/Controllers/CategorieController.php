<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function categorie()
    {
        $categorie = Categorie::all();
        return view('back-office.listecategorie', [
            'categorie' => $categorie,
        ]);
    }
    public function ajoutcategorie()
    {
        return view('back-office.categorie');
    }
    public function nouvellecategorie(Request $request)
    {
        $request->validate([
            'libele_categorie' => 'required|string|max:255',
        ]);

        $categorie = new Categorie();
        $categorie->libele_categorie = $request->input('libele_categorie');
        $categorie->save();

        return redirect()->back();
    }
    public function delete($id)
    {
        $categorie = Categorie::all();
        $categorie = Categorie::find($id);
        $categorie->delete();

        return redirect()->back();
    }
    public function modifiercategorie($id)
    {
        $categorie = Categorie::find($id);
        return view('back-office.modifiercategorie', compact('categorie'));
    }
    public function updatecategorie(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->libele_categorie = $request->libele_categorie;
        $categorie->save();
        return redirect()->back();
    }
}
