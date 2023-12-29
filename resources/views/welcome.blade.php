<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('resources/css/bootstrap.css')}}">
    <script src="{{asset('resources/js/bootstrap.js')}}"></script>
    <script src="{{asset('resources/js/bootstrap.bundle.js')}}"></script>
    <title>@yield('title','Главная страница')</title>
</head>

<body>
@include('components.header')
    @yield('content')
</body>

</html>
