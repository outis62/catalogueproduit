<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="dist/img/switchmaker.png" alt="switchmaker Logo" class="brand-imag elevation-3" style="opacity: .8; margin-left: 40px">
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('adminhome')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Accueil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('produit')}}" class="nav-link">
            <i class="nav-icon fas fa-box-open"></i>
              <p>Produits</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('categorie')}}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>Catégories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('accueil')}}" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>Boutique</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-ban"></i>
              <p> Déconnexion </p>
            </a>
          </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
