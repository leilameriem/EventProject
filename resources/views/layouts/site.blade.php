<!DOCTYPE html>
<html lang="en">

<head>
 
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>gérer votre événement</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assests/FrontEnd/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assests/FrontEnd/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assests/FrontEnd/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assests/FrontEnd/assets/vendor/venobox/venobox.css" rel="stylesheet') }}">
  <link href="{{ asset('assests/FrontEnd/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assests/FrontEnd/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assests/FrontEnd/assets/vendor/aos/aos.css" rel="stylesheet') }}">
<script src="https://kit.fontawesome.com/91eb611da5.js" crossorigin="anonymous"></script>
  <!-- Template Main CSS File -->  
  <link href="{{ asset('assests/FrontEnd/assets/css/style.css') }}" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  @include('FrontEnd.includes.header')
  <!-- End Header -->
   @yield('content')
 
  <!-- ======= Footer ======= -->

   @include('FrontEnd.includes.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assests/FrontEnd/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/hoverIntent/hoverIntent.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->


  
  <script src="{{ asset('assests/FrontEnd/assets/js/jquery.countdown.js') }}"></script>
  <script src="{{ asset('assests/FrontEnd/assets/js/main.js') }}"></script>

</body>

</html>