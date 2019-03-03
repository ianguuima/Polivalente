@extends('layouts/app')

@section('title')
Inicio
@endsection


<style>

.page-link{
    text-align: right !important;
}

</style>

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


@section('content')


<div class="pt-5 row">
    <div class="text-center pt-5 postagem col-sm-10">
        <h1 class="border-bottom">Últimas Notícias</h1>
            <div class="text-center">
                @foreach ($posts as $post)
                    <div class="mt-4 mx-auto card mb-3" style="max-width: 800px;">
                        <div class="row no-gutters">
                            <div class="text-left col-md-4">
                            <a href="noticias/visualizar/{{$post->id}}"><img style="max-width: 100%;" src="{{ asset('storage/'.$post->arquivo) }}" class="img-thumbnail card-img img-fluid" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="mt-3 card-body">
                                <a href="noticias/visualizar/{{$post->id}}"><h2 style="color: #2f86ce" class="card-title">{{$post->titulo}}</h2></a>
                                <h5 class="card-text">{{substr(html_entity_decode(strip_tags($post->mensagem)), 0, 200)}}...</h5>
                                <p class="card-text"><small class="text-muted">Criada em {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d/m/Y H:i')}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
    </div>

    <div class="section-index col-sm-2 d-none d-lg-block">
        
    </div>

</div>
@endsection