<?php

namespace App\Http\Controllers;

use App\Helpers\supprimer;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produit()
    {
        $produit = Produit::all();

        return view('back-office.listeproduit', [
            'produit' => $produit,
        ]);
    }
    public function ajoutproduit()
    {
        $categories = Categorie::all();
        return view('back-office.produit', [
            'categories' => $categories,
        ]);
    }
    public function nouveauproduit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'libele_produit' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'prix' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'libele_categorie' => 'required|string|max:255',
        ]);

        // $data = $request->validated();
        // Produit::create($data);

        $produit = new Produit();
        $produit->libele_produit = $request->input('libele_produit');
        $produit->image = $request->input('image');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->libele_categorie = $request->input('libele_categorie');
        $produit->save();

        return redirect()->back()->with('success', 'Produit ajouté avec succès');
    }
    public function supprimer($id)
    {

        if (deleteItem(App\Produit::class, $id)) {
            return redirect()->route('produit');
        } else {
            return redirect()->route('produit');
        }
    }
    public function modifierproduit($id)
    {
        $categories = Categorie::all();
        $produit = Produit::find($id);
        return view('back-office.modifierproduit', compact('produit', 'categories'));
    }
    public function updateproduit(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->libele_categorie = $request->input('libele_categorie');
        $produit->libele_produit = $request->input('libele_produit');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('/dist/img', $imagename);
            $produit->image = $imagename;
        }
        $produit->save();
        return redirect()->back();
    }
    public function detailproduit($id)
    {
        $produit = Produit::find($id);
        return view('back-office.detailproduit', compact('produit'));
    }

}
