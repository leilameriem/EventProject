<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('assests/Auth/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assests/Auth/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('assests/Auth/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assests/Auth/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assests/Auth/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
   
      @yield('content')
    <!-- Jquery JS-->
    <script src="{{ asset('assests/Auth/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('assests/Auth/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assests/Auth/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assests/Auth/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('assests/Auth/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->