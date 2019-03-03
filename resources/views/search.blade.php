@extends('layouts.app')


@section('title')
Pesquisa
@endsection

@section('nav')
    <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('about')}}">Sobre</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
    </li>
    
@endsection


<style>

.results{
    height: auto;
    background-color: transparent;
}


@media (min-width: 992px) {

.results{
    height: 81.2vh;
    background-color: transparent;
}

}


.box{
    height: 70vh;
    background-color: transparent;
}

.box h2{
    padding-top: 25vh;
}

#not-found{
    width: 30%;
    float: right;
    position: relative;
    top: 5vh;
}

</style>

@section('content')

<div class="pt-5 row">
    @if(isset($details))
        <div class="container results">
            <div class="text-center pt-5 postagem col-sm-12">
                <h1 class="border-bottom">Resultados da Pesquisa</h1>
                    <div class="text-center">
                        @foreach ($details as $noticia)
                            <div class="mt-4 mx-auto card mb-3" style="max-width: 800px;">
                                <div class="row no-gutters">
                                    <div class="text-left col-md-4">
                                    <a href="noticias/visualizar/{{$noticia->id}}"><img style="max-width: 100%;" src="{{ asset('storage/'.$noticia->arquivo) }}" class="img-thumbnail card-img img-fluid" alt="..."></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mt-3 card-body">
                                        <a href="noticias/visualizar/{{$noticia->id}}"><h2 style="color: #2f86ce" class="card-title">{{$noticia->titulo}}</h2></a>
                                        <h5 class="card-text">{{substr(html_entity_decode(strip_tags($noticia->mensagem)), 0, 200)}}...</h5>
                                        <p class="card-text"><small class="text-muted">Criada em {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $noticia->created_at)->format('d/m/Y H:i')}}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="text-center pt-5 postagem col-sm-12">
            <h1 class="border-bottom">Resultados da Pesquisa</h1>
                <div class="text-center">
                    <div class="mx-auto container box">
                    <h2>Nenhum resultado encontrado. Tente pesquisar por títulos.</h2>
                    <img id="not-found" src="{{ asset('imgs/question.png') }}">
                    </div>
            </div>
        </div>
    </div>
    @endif

@endsection