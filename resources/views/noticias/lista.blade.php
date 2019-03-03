@extends('layouts.app')


@section('title')
Notícias
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

.main{
    height: auto;
    background-color: transparent;
}
</style>


@section('content')
<div class="container pt-5 mx-auto">
    <div class="row justify-content-center pt-5 pb-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel
                <a href="{{url('noticias/nova')}}" role="button" class="btn btn-primary btn-sm float-right">Nova Noticia</a>
                </div>

                <div style="height: 670px;" class="card-body main">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif

                    <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Ações</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->titulo}}</td>
                                    <td>
                                        <a href="{{$post->id}}/editar" class="btn btn-light btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => '/noticias/'.$post->id, 'style' => 'display: inline;']) !!}
                                        <button type="submit" class="btn btn-light btn-sm">Excluir</button>
                                        {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection