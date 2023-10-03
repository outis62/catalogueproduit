@extends('back-office.dashboard')

@section('page-content')

<section class="liste">

 <div class="container content-wrapper">
     <a href="{{ route('ajoutcategorie') }}" type="button" class="btn btn-primary">Ajouter une categorie</a>
     <div class="table-responsive">
         <table id="categorie" class="table table-hover">
             <thead>
                 <tr>
                     <th>Nom</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                     @foreach ($categorie as $categorie)
                     <tr>
                         <td>{{ $categorie->libele_categorie }}</td>
                         <td>
                         <a href="{{route('modifiercategorie', $categorie->id)}}" class="btn btn-info d-inline">Edite</a>
                         <a href="{{ route('delete',$categorie->id) }}" class="btn btn-danger d-inline mt-1" onclick="return confirm('voulez-vous vraiment supprimer cette catégorie?')">Supp</a>
                     </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div>
</section>
@endsection
