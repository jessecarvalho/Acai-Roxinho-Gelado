<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roxinho Gelado</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('font/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('site/hover-min.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row align-items-center justify-content-center">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset("img/logo.png")}}" id="logo"></a>
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link {{ (Route::current()->getName() === 'home' ? 'active-link' : '') }}" href="{{route('home')}}">Inicio</a> </li>
                <li class="nav-item"> <a class="nav-link {{ (Route::current()->getName() === 'order' ? 'active-link' : '')}}" href="{{route('order')}}">Peça Online</a></li>
                <li class="nav-item"> <a class="nav-link {{ (Route::current()->getName() === 'about' ? 'active-link' : '')}}" href="{{route('about')}}">Sobre</a> </li>
                <li class="nav-item"> <a class="nav-link {{ (Route::current()->getName() === 'contact' ? 'active-link' : '')}}" href="{{route('contact')}}">Contato</a> </li>
            </ul>
        </div>
    </nav>

@yield('content')
    <hr color="lightgray">
    <div class="bottom text-center">
        <h1>Site produzido por MainCode</h1>
        <div class="row">
            <div class="col-6">
                <h2>Rua Santa Bertrudez, 52, São Paulo, SP</h2>
                <h2><i class="icofont-brand-whatsapp"></i> (11) 94851-8009</h2>
                <h2><i class="icofont-telephone"></i>(11) 2456-8833</h2>
            </div>
            <div class="col-6">
                <a href="https://www.facebook.com/" class="drop_underline"> <i class="icofont-small icofont-facebook"></i></a>
                <a href="https://www.twitter.com/" class="drop_underline"> <i class="icofont-small icofont-twitter"></i></a>
                <a href="https://www.instagram.com/" class="drop_underline"> <i class="icofont-small icofont-instagram"></i></a>
            </div>
        </div>
    </div>

<script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.bundle.js')}}"></script>
</body>
</html>
