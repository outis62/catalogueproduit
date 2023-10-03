@extends('back-office.dashboard')
<base href="/public">
@section('page-content')
<section>
<div class="container-fluid produit">
    <div class="row">
        <div class="col"><h3 class="text-center text-info">Détails du produit</h3></div>
    </div>
    <div class="row mt-2 pb-3">
    <div class="col-md-8 offset-4" style="color: black;">
    <p>Nom: <span class="text-primary">{{$produit->libele_produit}}</span></p>
    <p>Prix: <span class="text-primary">{{$produit->prix}} FCFA</span></p>
    <p>Catégorie: <span class="text-primary">{{$produit->libele_categorie}}</span></p>
    <p>Description: <span class="text-primary">{{$produit->description}}</span></p>
    <p>Photo:</p>
    <img src="{{ asset('dist/img/' . $produit->image) }}" alt="{{ $produit->libele_produit }}" style="max-width: 100px;">
</div>

  </div>
</div>
</section>
@endsection
