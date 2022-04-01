<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/animated.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/fontawesome.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/templatemo-plot-listing.css') }}" >

  <title>Event Manager</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" >

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/app.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/fontawesome.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/templatemo-plot-listing.css') }}" >

</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/">Naslovnica</a></li>
              <li><a href="/category">Kategorije</a></li>
              <li><a href="/listing">Događaji</a></li>
              <li><a href="/contact">Kontakt</a></li>
              @can('is-admin')<li><a href="/admin/users">Korisnici</a></li>@endcan
              <li>
                @guest
                <div class="main-white-button"><a href="login"><i class="fa fa-user" aria-hidden="true"></i> PRIJAVITE SE</a></div>
                @endguest
                @auth

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="main-white-button">
                        <a href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="fa fa-user" aria-hidden="true"></i> 
                            ODJAVA
                        </a>
                    </div>
                </form>
                @endauth
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <header class="placeholder header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s"></header>
  <!-- ***** Header Area End ***** -->

    @include('partials.alerts')
    @yield('content')

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src={{asset('/assets/images/black-logo-dark.png')}} alt="Plot Listing" , width="100">
            </div>
            <p> Najbolja stranica za oglašavanje vaših događaja! </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Tražite nešto?</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-12">
                <ul>
                  <li><a href="#">Kategorije</a></li>
                  <li><a href="#">Dodajte svoj događaj</a></li>
                  <li><a href="#">Događaji</a></li>
                  <li><a href="#">Kontaktirajte nas</a></li>
                </ul>
              </div>
              <div class="col-lg-12">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Kontaktirajte nas</h4>
            <p>Mostar, 88000</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">+387-000-000</a>
              </div>
              <div class="col-lg-6">
                <a href="#">030-000-000</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2021 Event Manager | All Rights Reserved.
              <br>
              Design: Filip Oroz, Matej Stojić</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <!-- Scripts -->
  <script type="text/javascript" src={{asset('/vendor/jquery/jquery.min.js')}}></script>
  <script type="text/javascript" src={{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
  <script type="text/javascript" src={{asset('/assets/js/owl-carousel.js')}}></script>
  <script type="text/javascript" src={{asset('/assets/js/animation.js')}}></script>
  <script type="text/javascript" src={{asset('/assets/js/imagesloaded.js')}}></script>
  <script type="text/javascript" src={{asset('/assets/js/custom.js')}}></script>

</body>

</html>
