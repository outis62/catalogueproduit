@extends('back-office.dashboard')
<base href="/public">
@section('page-content')
<section>
<div class="container-fluid categorie">
    <div class="row mt-5 pb-3">
        <div class="col-md-12">
  <h3 class="text-center text-info">Formulaire des catégories</h3>
  <form action="{{route('updatecategorie', $categorie->id)}}" method="POST">
  @csrf
    <input class="p-2 mt-3 mb-3 rounded" type="text" name="libele_categorie" value="{{$categorie->libele_categorie}}" required>
    <input class="d-block rounded-2" type="submit" value="Modifier">
  </form>
  </div>
  </div>
</div>
</section>
@endsection
