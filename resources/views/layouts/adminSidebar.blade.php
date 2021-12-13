<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Primary Meta Tags -->
  <title>Volt Free Bootstrap Dashboard - Bootstrap Tables</title>
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

  <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
      <img class="navbar-brand-dark" src="../../../bootstrap/assets/img/brand/light.svg" alt="Volt logo" /> <img
        class="navbar-brand-light" src="../../../bootstrap/assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="../../../bootstrap/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
              alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, Jane</h2>
            <a href="../../pages/examples/sign-in.html"
              class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              Sign Out
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
            aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a href="../../index.html" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="../../../bootstrap/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">WebApp</span>
          </a>
        </li>
        <li class="nav-item">
          <span class="nav-link  d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
            data-bs-target="#submenu-app">
            <span>
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                    clip-rule="evenodd"></path>
                </svg>
              </span>
              <span class="sidebar-text">Car_Inventory</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse  show " role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item  active ">
                <a class="nav-link" href="/admin-panel">
                  <span class="sidebar-text">Inventory</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>

 

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