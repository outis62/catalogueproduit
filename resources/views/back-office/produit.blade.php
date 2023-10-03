@extends('back-office.dashboard')

@section('page-content')
<section>
<div class="container-fluid produit">
    <div class="row">
        <div class="col"><h3 class="text-center text-info">Formulaire des Produits</h3></div>
    </div>
    <div class="row mt-2 pb-3">
    <div class="col-md-12">
  <form action="{{route('nouveauproduit')}}" method="POST" class="d-block">
  @csrf
    <label class="d-block">Choisir une Catégorie</label>
    <select name="libele_categorie" class="form-control" style="width: 570px;margin-left: 20px">
    @foreach ($categories as $categorie)
        <option value="{{ $categorie->libele_categorie }}">{{ $categorie->libele_categorie }}</option>
    @endforeach
</select>
<label  class="d-block">Image du produit</label>
    <input class="d-block mb-2 form-control" type="file" name="image" style="width: 570px;margin-left: 22px" required>
    <input type="text" class="d-block mb-2 form-control" name="libele_produit" placeholder="Saisissez le nom du produit ici!" required>
    <input class="d-block mb-2 form-control" type="text" name="prix" placeholder="Saisissez le prix du produit ici!" required>
    <textarea class="d-block mb-2 form-control" name="description" placeholder="La description du produit ici!" style="height:100px; margin-left: 22px; width: 570px" required></textarea>

    <input type="submit" class="d-block" value="Enregister">
  </form>
    </div>
  </div>
</div>
</section>
@endsection
