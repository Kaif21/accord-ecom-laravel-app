<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    @include('admin.includes.header')
    <div class="d-flex align-items-stretch">
        @include('admin.includes.sidebar')
        @yield('body')
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/') }}admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="{{ asset('/') }}admin/assets/vendor/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/charts-home.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/front.js"></script>
</body>

</html>
