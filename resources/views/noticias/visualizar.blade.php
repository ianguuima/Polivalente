@extends('layouts.app')

@section('title')
Visualizando Notícia
@endsection

@section('nav')
    <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('about')}}">Sobre</a>
    </li>


    <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contato</a>
     </li>
    
@endsection



<style>

    .titulo{
        padding-top: 20px;
    }

    .txt{
        font-family: 16px;
    }

    .visualizar{
        font-size: 22px;
    }

</style>



<div class="pt-5 container text-center mx-auto">
    <div class="row">

        <div class="text-center mx-auto pt-5 col-md-8">
        
            <h1 class="titulo">
                {{$noticia->titulo}}
            </h1>
        <h6 class="border-bottom">Criada em {{$noticia->created_at->format('d-m-Y H:i')}}</h6>

            <a href="{{ asset('storage/'.$noticia->arquivo) }}" data-lightbox="image-1"><img class="mt-2" style="max-width: 50%" src="{{ asset('storage/'.$noticia->arquivo) }}"></a>
        
        </div>

    </div>

</div>

<div class="pt-3 container text-center">
    <div class="visualizar mx-auto pt-2 col-md-9">

        <?=html_entity_decode($noticia->mensagem)?>
    
    </div>

    <div class="border-top pt-5 mb-3 fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
</div>

