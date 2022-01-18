<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Event Manager</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/vendor/bootstrap/css/bootstrap.min.css') }}" >

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/fontawesome.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/owl.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/templatemo-plot-listing.css') }}" >

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
              <li><a href="index" class="active">Naslovnica</a></li>
              <li><a href="category">Kategorije</a></li>
              <li><a href="listing">Događaji</a></li>
              <li><a href="contact">Kontakt</a></li>
              <li>
                <div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Dodajte svoj događaj</a></div>
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
  <!-- ***** Header Area End ***** -->
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Kategorije događaja</h6>
            <h2>Događaji različitih kategorija</h2>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="category-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt="">
                          <h4>Stanovi</h4>
                        </span>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt="">
                          <h4>Hrana i Piće</h4>
                        </span>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-03.png" alt="">
                          <h4>Sport</h4>
                        </span>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-04.png" alt="">
                          <h4>Kupovina</h4>
                        </span>
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-05.png" alt="">
                          <h4>Konferencije</h4>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-01.png" alt="">
                                        <h4>Stanovi</h4>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Pregledajte Događaje</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Opis Kategorije Stanovi</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Ukupno Oglasa</h4>
                                    </div>
                                    <span class="list-item">Ovaj Tjedan: 200 Oglasa &amp; 150 Prodaja<br>Ovaj Mjesec: 1,800
                                      Oglasa &amp; 1,560 Prodaja<br>Ove Godine: 16,000 Oglasa &amp; 14,000 Prodaja</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>Osnovne Informacije o Kategoriji Stanovi</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being
                                      checked in.
                                      <br>** Listing will be checked by our team members.
                                      <br>*** After being sold, it should imediately be removed from our site and
                                      properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-02.png" alt="">
                                        <h4>Hrana i Piće</h4>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Pregledajte Događaje</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Opis Kategorije Food and Life</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                    <br>
                                    <p><strong>Did you know?</strong>
                                      <br>You can get the best free HTML templates on Too CSS blog. Visit the blog pages
                                      and explore fresh and latest website templates.
                                    </p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Ukupno Oglasa</h4>
                                    </div>
                                    <span class="list-item">Ovaj Tjedan: 124 Oglasa &amp; 84 Prodaja<br>Ovaj Mjesec: 1,040
                                      Oglasa &amp; 720 Prodaja<br>Ove Godine: 10,640 Oglasa &amp; 9,600 Prodaja</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being
                                      checked in.
                                      <br>** Listing will be checked by our team members.
                                      <br>*** After being sold, it should imediately be removed from our site and
                                      properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-03.png" alt="">
                                        <h4>Sport</h4>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Pregledajte Događaje</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Opis Kategorije Sport</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Ukupno Oglasa</h4>
                                    </div>
                                    <span class="list-item">Ovaj Tjedan: 800 Oglasa &amp; 400 Prodaja<br>Ovaj Mjesec: 1,600
                                      Oglasa &amp; 1,200 Prodaja<br>Ove Godine: 14,000 Oglasa &amp; 12,000 Prodaja</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>Osnovne Informacije o Kategoriji cars</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being
                                      checked in.
                                      <br>** Listing will be checked by our team members.
                                      <br>*** After being sold, it should imediately be removed from our site and
                                      properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-04.png" alt="">
                                        <h4>Kupovina</h4>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Pregledajte Događaje</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description about Kupovina</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Ukupno Oglasa</h4>
                                    </div>
                                    <span class="list-item">Ovaj Tjedan: 150 Oglasa &amp; 140 Prodaja<br>Ovaj Mjesec: 1,500
                                      Oglasa &amp; 1,100 Prodaja<br>Ove Godine: 15,000 Oglasa &amp; 14,000 Prodaja</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. for Kupovina</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being
                                      checked in.
                                      <br>** Listing will be checked by our team members.
                                      <br>*** After being sold, it should imediately be removed from our site and
                                      properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-05.png" alt="">
                                        <h4>Konferencije</h4>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Pregledajte Događaje</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Opis Kategorije  Konferencije</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Ukupno Oglasa</h4>
                                    </div>
                                    <span class="list-item">Ovaj Tjedan: 200 Oglasa &amp; 120 Prodaja<br>Ovaj Mjesec: 1,400
                                      Oglasa &amp; 900 Prodaja<br>Ove Godine: 14,000 Oglasa &amp; 12,000 Prodaja</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>Osnovne Informacije o Kategoriji Konferencije</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak
                                      incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                      gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                      accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being
                                      checked in.
                                      <br>** Listing will be checked by our team members.
                                      <br>*** After being sold, it should imediately be removed from our site and
                                      properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/black-logo.png" alt="Plot Listing" width="500" , width="100">
            </div>
            <p> Najbolja stranica za oglašavanje vaših događaja! </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Tražite nešto?</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <li><a href="#">Kategorije</a></li>
                  <li><a href="#">Dodajte svoj događaj</a></li>
                  <li><a href="#">Događaji</a></li>
                  <li><a href="#">Kontaktirajte nas</a></li>
                </ul>
              </div>
              <div class="col-lg-6">

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
  <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/animation.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>