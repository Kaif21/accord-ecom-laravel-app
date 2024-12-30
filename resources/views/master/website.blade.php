<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('/')}}website/assets/images/favicon.png" type="image/x-icon">

  <title>
    Giftos
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="{{asset('/')}}website/assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('/')}}website/assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
 @include('website.includes.header')
@yield('body')
@include('website.includes.footer')

  <script src="{{asset('/')}}website/assets/js/jquery-3.4.1.min.js"></script>
  <script src="{{asset('/')}}website/assets/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('/')}}website/assets/js/custom.js"></script>

</body>

</html>
