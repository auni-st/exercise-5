<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  @vite("public/assets/vendor/bootstrap/css/bootstrap.min.css")
  @vite("public/assets/vendor/bootstrap-icons/bootstrap-icons.css")
  @vite("public/assets/vendor/boxicons/css/boxicons.min.css")
  @vite("public/assets/vendor/quill/quill.snow.css")
  @vite("public/assets/vendor/quill/quill.bubble.css")
  @vite("public/assets/vendor/remixicon/remixicon.css")
  @vite("public/assets/vendor/simple-datatables/style.css")

=  <!-- Template Main CSS File -->
    @vite("public/assets/css/style.css")
    @stack("style")


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <x-topbar></x-topbar>

  <!-- ======= Sidebar ======= -->
  <x-sidebar></x-sidebar>

  <main id="main" class="main">
    @yield('content')


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @vite("public/assets/vendor/apexcharts/apexcharts.min.js")
  @vite("public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")
  @vite("public/assets/vendor/chart.js/chart.min.js")
  @vite("public/assets/vendor/echarts/echarts.min.js")
  @vite("public/assets/vendor/quill/quill.min.js")
  @vite("public/assets/vendor/simple-datatables/simple-datatables.js")
  @vite("public/assets/vendor/tinymce/tinymce.min.js")
  @vite("public/assets/vendor/php-email-form/validate.js")
  
  @stack("script")

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>