<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>users</title>

    {{-- FontAwesome 5 kit --}}
    <script src="https://kit.fontawesome.com/85acf21687.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Volt Free Bootstrap Dashboard - Bootstrap Tables">
  <meta name="author" content="Themesberg">
  <meta name="description"
    content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta name="keywords"
    content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
  <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
  <meta property="og:title" content="Volt Free Bootstrap Dashboard - Bootstrap Tables">
  <meta property="og:description"
    content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta property="og:image"
    content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
  <meta property="twitter:title" content="Volt Free Bootstrap Dashboard - Bootstrap Tables">
  <meta property="twitter:description"
    content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta property="twitter:image"
    content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="../../../bootstrap/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../bootstrap/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../bootstrap/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../../bootstrap/assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../../../bootstrap/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Sweet Alert -->
  <link type="text/css" href="../../../bootstrap/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="../../../bootstrap/vendor/notyf/notyf.min.css" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="../../../bootstrap/css/volt.css" rel="stylesheet">

  <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>
<body>
    <div id="app">
        @guest

        @else
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Users
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">Profile</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="/profile/edit">Edit Profile</a>
                                        
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endguest
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- Core -->
<script src="../../../bootstrap/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="../../../bootstrap/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="../../../bootstrap/vendor/onscreen/dist/on-screen.umd.min.js"></script>

  <!-- Slider -->
  <script src="../../../bootstrap/vendor/nouislider/dist/nouislider.min.js"></script>

  <!-- Smooth scroll -->
  <script src="../../../bootstrap/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Charts -->
  <script src="../../../bootstrap/vendor/chartist/dist/chartist.min.js"></script>
  <script src="../../../bootstrap/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

  <!-- Datepicker -->
  <script src="../../../bootstrap/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Sweet Alerts 2 -->
  <script src="../../../bootstrap/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="../../../bootstrap/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Notyf -->
  <script src="../../../bootstrap/vendor/notyf/notyf.min.js"></script>

  <!-- Simplebar -->
  <script src="../../../bootstrap/vendor/simplebar/dist/simplebar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="../../../bootstrap/assets/js/volt.js"></script>
  
</body>
</html>
