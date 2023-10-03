<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projet Test Switch Maker</title>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/appli.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @include('master.header')
    <div class="wrapper">
    @include('master.sidebar')
    <div class="page-content">
    @yield('page-content')
    </div>
    @include('master.footer');
    </div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="bootstrap/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="dist/js/appli.js"></script>
</body>
</html>
