<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-5 body-container">  @yield('content')</div>
    <footer id="footer" class="text-center">
        <p> copyright 2021 &copy; wbp</p>
    </footer>
    
</body>
</html>