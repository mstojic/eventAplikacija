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
  <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/animated.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/fontawesome.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/owl.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/templatemo-plot-listing.css') }}" >

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
              <li><a href="index">Home</a></li>
              <li><a href="category">Category</a></li>
              <li><a href="listing">Events</a></li>
              <li><a href="contact" class="active">Contact Us</a></li>
              <li>
                <div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Event</a></div>
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
            <h6>Keep in touch with us</h6>
            <h2>Feel free to send us a message!</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-6">
                <div id="map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.494965166714!2d17.794494815466024!3d43.345756179133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b43baf988f99f%3A0xbb68478e609acfa4!2sFaculty%20of%20Mechanical%20Engineering%2C%20Computing%20and%20Electrical%20Engineering%2C%20University%20of%20Mostar!5e0!3m2!1sbs!2sba!4v1641938597479!5m2!1sbs!2sba"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy""
                    width=" 100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <form id="contact" action="" method="get">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on"
                          required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email"
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message"
                          required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i>
                          Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
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
            <p> Best website for searching or publishing Events! </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Kategory</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
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