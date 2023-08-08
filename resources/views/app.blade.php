<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title inertia>{{ config('app.name', 'Laravel') }}</title>

  <meta name="description" content="Sistem Informasi Asuransi Perbankan - v3">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Sistem Informasi Asuransi Perbankan - v3">
  <meta property="og:site_name" content="SIAPv3">
  <meta property="og:description" content="Sistem Informasi Asuransi Perbankan - v3">
  <meta property="og:type" content="website">
  <meta property="og:url" content="siaplaku.id">
  <meta property="og:image" content="">

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
  <!-- END Icons -->

  <!-- Stylesheets -->
  <!-- Codebase framework -->
  <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

  <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
  <!-- END Stylesheets -->
  <!--
            Codebase JS

            Core libraries and functionality
            webpack is putting everything together at assets/_js/main/app.js
        -->
  <!-- <script src="assets/js/codebase.app.min.js"></script> -->
  <script src="assets/js/codebase.app.min.js"></script>

  <!-- jQuery (required for Select2 + jQuery Validation plugins) -->
  <script src="assets/js/lib/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

  {{-- <script type="module" src="main.js"></script> --}}

  <!-- Scripts -->
  @routes
  @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
  @inertiaHead
</head>

<body>
  @if (Auth::check())
  <div id="page-container" class="remember-theme sidebar-o enable-page-overlay side-scroll page-header-modern">
    @else
    <div id="page-container" class="main-content-boxed">
      @endif
      @inertia
    </div>
</body>

</html>
