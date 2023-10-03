<nav class="main-header navbar navbar-expand navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user" style="color: white;"></i><span class="pl-2" style="color: white;">{{ Auth::user()->name }}</span>
        </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('profile.edit') }}" class="dropdown-item">Profil</a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
          </div>
      </li>
  </ul>
</nav>
