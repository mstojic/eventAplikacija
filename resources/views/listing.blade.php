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
            <h6>Pogledajte dostupne oglase</h6>
            <h2>Oglasi za različite kategorije</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt=""></span>
                        Stanovi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        Hrana i Piće
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-03.png" alt=""></span>
                        Sport
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-04.png" alt=""></span>
                        Konferencije
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <!-- first category listing of items -->
                    <li class="active">
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event1</h4>
                                      </a>
                                      <h6>Organizator:</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $600
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event2</h4>
                                      </a>
                                      <h6>Organizator:</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $800
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event3</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $950
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event4</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $450
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event5</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $550
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event6</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $650
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- third page of first category -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event7</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $600 to $950
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event8</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $840
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Event9</h4>
                                      </a>
                                      <h6>Organizator: </h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $950
                                      </span>
                                      <span class="details">Detalji: <em>Detalji o događaju.</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- second category listing of items -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Food First page</h4>
                                      </a>
                                      <h6>Organizator: Food Delivery</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $600
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Food Item 2</h4>
                                      </a>
                                      <h6>Organizator: Food Delivery</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $540
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Food Item 3</h4>
                                      </a>
                                      <h6>Organizator: Food Delivery</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $720
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- second category second page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>FOOD Second Page</h4>
                                      </a>
                                      <h6>Organizator: Food Delivery</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $420
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Best Food Item 5</h4>
                                      </a>
                                      <h6>Organizator: Food Delivery</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $450
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Amazing Food Item 6</h4>
                                      </a>
                                      <h6>Organizator: Food Delivery</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $500
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- third category first page -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Third Category First Page</h4>
                                      </a>
                                      <h6>Organizator: Sale Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $750
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Car Item 2</h4>
                                      </a>
                                      <h6>Organizator: Sale Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $880
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Car Item 3</h4>
                                      </a>
                                      <h6>Organizator: Sale Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $770
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- third category second page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Third Category Second Page</h4>
                                      </a>
                                      <h6>Organizator: Sale Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $660
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Car Item 5</h4>
                                      </a>
                                      <h6>Organizator: Sale Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $550
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Car Item 6</h4>
                                      </a>
                                      <h6>Organizator: Sale Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $440
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- third category third page -->
                            <!-- NONE -->


                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- 4th category 1st page -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Traveling Item 1</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $400
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Traveling Item 2</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $500
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Traveling Item 3</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $342
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- 4th category 2nd page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>4th Category 2nd Page</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $268
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Traveling Item 5</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $145
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>Traveling Item 6</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $240
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- 4th category 3rd page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#">
                                        <h4>4th Category 3rd Page</h4>
                                      </a>
                                      <h6>Organizator: Travel Agent</h6>
                                      <span class="price">
                                        <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                        $360
                                      </span>
                                      <span class="details">Detalji: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                        Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                        Kupatila</span>
                                    </div>
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
            <p>  Najbolja stranica za oglašavanje vaših događaja! </p>
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