<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

	@yield('css')

</head>
<body class="app">
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
            <img src="images/photo.jpg" alt="image">
        </a>
      </div>
      <div class="mobile-site-title"><a href="#">Fityan Ali Munshi</a></div>
    </div>

    <a class="menu-toggle mobile-visible">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- /Mobile Header -->
    ````<div>
        <!-- #Left Sidebar ==================== -->
        @include('menu.partials.sidebar')
        </div>

          <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

           @include('menu.about-me')


           

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
  <script src="{{ mix('/js/app.js') }}"></script>
    @yield('js')

</body>

</html>
