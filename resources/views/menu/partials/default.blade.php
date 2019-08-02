<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Fityan Ali Munshi">
    <meta name="description" content="Fityan Ali Munshi">
    <meta name="author" content="Fityan Ali Munshi">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Webtoor') }}</title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

	@yield('css')
    <script src="js/modernizr.custom.js"></script>

</head>
<body>

     <!-- Loading animation -->
     <div class="preloader">
            <div class="preloader-animation">
              <div class="preloader-spinner">
              </div>
            </div>
          </div>
          <!-- /Loading animation -->
      
  <!-- Arrows Nav -->
  <div class="lmpixels-arrows-nav">
    <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
    <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
  </div>
  <!-- /Arrows Nav -->

  <div id="page" class="page">
 <!-- Mobile Header -->
 <div class="mobile-header mobile-visible">
    <div class="mobile-logo-container">
      <div class="mobile-header-image">
        <a href="#">
            <img src="images/logo.png" alt="image">
        </a>
      </div>
      <div class="mobile-site-title"><a href="#">Fityan Ali Munshi</a></div>
    </div>

    <a class="menu-toggle mobile-visible">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- /Mobile Header -->
        <!-- #Left Sidebar ==================== -->
        @include('menu.partials.sidebar')

          <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            @yield('content')

           

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
    {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

    <script data-cfasync="false" src="cdn/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/pages-switcher.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ripples.js"></script>
    <script src="preview/lmpixels-demo-panel.js"></script>
    @yield('js-about')
    @yield('js-contact')


</body>

</html>
