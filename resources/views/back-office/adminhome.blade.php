@extends('back-office.dashboard')

@section('page-content')
  <section>
      <div class="container-fluid">
        <div class="row mt-5 home">
          <div class="col-lg-5 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <p>Nombre de produits</p>
                <ul>
                  <li><i class="nav-icon fas fa-box-open"></i> : {{$produit}}</li>
                </ul>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('produit')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-5 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <p>Nombre de catégories</p>
                <ul>
                  <li><i class="nav-icon fas fa-bars"></i> : {{$categorie}}</li>
                </ul>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('categorie')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </section>
    @endsection
