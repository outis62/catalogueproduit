@extends('back-office.dashboard')

@section('page-content')

<section class="liste">
    <div class="container content-wrapper">
        <a href="{{ route('ajoutproduit') }}" type="button" class="btn btn-primary">Ajouter un produit</a>
        <div class="table-responsive">
            <table id="categorie" class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Photo</th>
                        <th>Prix</th>
                        <th class="description">Description</th>
                        <th>Categorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produit as $produit)
                    <tr>
                        <td>{{ $produit->libele_produit }}</td>
                        <td>
                            @if (Str::startsWith($produit->image, ['http://', 'https://']))
                            <img src="{{ $produit->image }}" alt="{{ $produit->libele_produit }}" style="max-width: 100px;">
                            @else
                            <img src="{{ asset('dist/img/' . $produit->image) }}" alt="{{ $produit->libele_produit }}" style="max-width: 100px;">
                            @endif
                        </td>
                        <td>{{ $produit->prix }}</td>
                        <td>{{ $produit->description }}</td>
                        <td>{{ $produit->libele_categorie }}</td>
                        <td>
                            <a href="{{route('detailproduit', $produit->id)}}" class="btn btn-secondary">Detail</a>
                            <a href="{{route('modifierproduit', $produit->id)}}" class="btn btn-info d-iniline">Edite</a>
                            <a href="{{ route('supprimer', $produit->id)}}" class="btn btn-danger d-inline mt-1" onclick="return confirm('voulez-vous vraiment supprimer ce produit?')">Supp</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
