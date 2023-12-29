<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('resources/css/bootstrap.css')}}">
    <script src="{{asset('resources/js/bootstrap.js')}}"></script>
    <script src="{{asset('resources/js/bootstrap.bundle.js')}}"></script>
    <title>@yield('title','Панель администратора')</title>
</head>

<body>
@include('components.header')
<div class="container">
    <div class="row mt-lg-5">
        <div class="col">
            <a href="{{route('category')}}" class="me-2 btn btn-primary">Категории</a>
            <a href="{{route('product')}}" class="me-2 btn btn-primary">Товары</a>
            <a href="{{route('admin.order')}}" class="btn btn-primary">Заказы</a>
        </div>
    </div>
</div>
@yield('content')
</body>

</html>
