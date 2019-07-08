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


    <div>
        <!-- #Left Sidebar ==================== -->
        @include('menu.partials.sidebar')

        </div>
    </div>

  <script src="{{ mix('/js/app.js') }}"></script>
    @yield('js')

</body>

</html>
