<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Alumni Nusa Mandiri</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="template/assets/img/unm.png" rel="icon">
    <link href="template/assets/img/unm.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="template/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="template/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Flexor - v4.9.1
    * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

{{--@include('frontend.widget.topbar')--}}
@include('frontend.widget.header')
@include('frontend.widget.hero')

<main id="main">
    @yield('konten')
</main><!-- End #main -->

@include('frontend.widget.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="template/assets/vendor/aos/aos.js"></script>
<script src="template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="template/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="template/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="template/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="template/assets/js/main.js"></script>
@yield('script')
</body>

</html>
