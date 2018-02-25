<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventre</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Themefisher Font -->  
  <link href="{{asset('plugins/themefisher-font/style.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('plugins/font-awsome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="{{asset('plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{asset('plugins/slick/slick.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
    @yield('styles')
</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="index.html">
        <img src="{{asset('images/logo.png')}}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" >
            <i class="fa fa-home fa-lg"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('menu.index')}}" >Menu</a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">Formations</a>
            <!-- Dropdown list -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('formations.index')}}">Offres de formations</a>
              <a class="dropdown-item" href="#">Candidature Admission Inscription</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Espace étudiants</a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">Entreprises</a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Former vos collaborateurs</a>
            <a class="dropdown-item" href="#">Recruter nos étudiants et jeunes diplomés</a>
            <a class="dropdown-item" href="#">Partenariats</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">Vie de l'école</a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Actualités</a>
            <a class="dropdown-item" href="#">Média</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <a href="#" class="ticket">
        <img src="{{asset('images/icon/ticket.png')}}" alt="ticket">
        <span>Buy Ticket</span>
      </a>
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->

@yield('content')




  <!-- JAVASCRIPTS -->
    <!-- jQuey -->
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('plugins/popper/popper.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Smooth Scroll -->
    <script src="{{asset('plugins/smoothscroll/SmoothScroll.min.js')}}"></script>  
    <!-- Isotope -->
    <script src="{{asset('plugins/isotope/mixitup.min.js')}}"></script>  
    <!-- Magnific Popup -->
    <script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Carousel -->
    <script src="{{asset('plugins/slick/slick.min.js')}}"></script>  
    <!-- SyoTimer -->
    <script src="{{asset('plugins/syotimer/jquery.syotimer.min.js')}}"></script>
    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="{{asset('plugins/google-map/gmap.js')}}"></script>
    <!-- Custom Script -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('scripts')
</body>

</html>