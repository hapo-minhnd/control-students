<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/flatpickr.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300,400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/7092c56c26.js"></script>
</head>

<body>

<!-- HEADER -->
{{--@include('layouts.welcome.header')--}}


<!-- MAIN CONTENT -->
@yield('content')

<!-- FOOTER -->
{{--
@include('layouts.welcome.footer')--}}

@section('script')

    <script src="/javascripts/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="/javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="/javascripts/flatpickr.min.js" type="text/javascript"></script>
    <script src="/javascripts/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="/javascripts/slick.min.js" type="text/javascript"></script>
    <script src="/javascripts/application.js" type="text/javascript"></script>

</body>
</html>