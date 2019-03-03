<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/lightbox.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{asset('imgs/icon.png')}}" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

    <title>Polivalente - @yield('title')</title>
</head>

<style>

    body{
        width: 100%;
        margin: 0;
        height: auto;
        font-family: 'Open Sans', sans-serif;
        overflow: auto;
    }

    nav{
        font-weight: 800;
        font-family: 'Noto Sans JP', sans-serif;
    }

    a:hover{
        color: white !important;
    }

    .row{
        margin: 0; !important;
    }

    .section-index{
        height: 1000px;
        background-color: lightgray;
    }

    .postagem{
        height: auto;
    }

    .postagem h1, p{
        margin-top: 10px;
        margin-left: 10px;
    }

    .blue{
        background-color: #2f86ce;
    }

    .noticias{
        margin-left: 15%;
    }

    .sobre p{
        font-size: 18px; 
    }

</style>


<body>

    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=2029444233777461&autoLogAppEvents=1"></script>


<nav style="font-size: 22px; border-bottom: 5px solid #3178b3" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{asset('imgs/logo3.png')}}" width="60" height="60" class="d-inline-block align-top" alt="">
    </a>

    <button style="border: none; !important; font-size: 32px;" class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @yield('nav')
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-5">
                    @if(Auth::check())
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá, {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="{{route('lista')}}">Painel</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Sair</a>
                        </div>
                    </div>
                    @else
                    <li class="nav-item mr-5"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    @endif
            </li>
        </ul>

        <form action="{{ url('search/') }}" method="POST" class="form-inline my-2 my-lg-0">
            {{ csrf_field() }}
            <input name="pesquisa" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="text-white btn my-2 my-sm-0 btn-primary" type="submit">Pesquisar</button>
        </form>

    </div>
</nav>


    @yield('content')



<!-- Footer -->
<footer style="border-top: 5px solid #3178b3" class="footer font-small blue pt-4 text-white">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Social buttons -->
        <ul class="list-inline text-center">
            <li class="list-inline-item">
                <a href="https://www.facebook.com/polivalentecarangola/?ref=br_rs" target="_blank" class="text-white btn-floating btn-fb mx-2">
                    <i style="font-size: 32px;" class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="tel:3237413393" class="btn-floating btn-tw mx-2 text-white">
                  <i style="font-size: 32px;" class="fas fa-phone"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright
        Emilia Esteves Marques, Carangola. Criado por <a class="text-decoration-none text-white" href="https://www.facebook.com/profile.php?id=100003208055890" target="_blank"><strong>Ian Guimarães</strong></a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>