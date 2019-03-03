@extends('layouts.app')

@section('title')
Nova Noticia
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


.results{
    height: auto;
    background-color: transparent;
}

</style>


@section('content')
    <div style="margin-top: 120px; margin-bottom: 60px;" class="container results pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Escrevendo uma Noticia... <a class="float-right" href="{{url('noticias/lista')}}">Lista de Notícias</a> </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Session::has('mensagem_sucesso'))
                           <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif


                        @if(Request::is('*/editar'))

                        <form action="{{ url('noticias/'.$noticia->id) }}" enctype="multipart/form-data" method="POST">
                            
                            <div class="form-group">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input name="titulo" id="titulo" type="text" value="{{$noticia->titulo}}" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <textarea name="mensagem" id="mensagem" class="form-control" cols="50" rows="10">{{$noticia->mensagem}}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <input name="arquivo" id="arquivo" type="file" value="Enviar Imagem" class="btn btn-secondary btn-sm">
                                </div>
    
    
                            <input type="submit" name="Salvar" value="Atualizar Notícia" class="btn btn-primary">       

                        @else

                        <form action="{{ url('noticias/salvar') }}" enctype="multipart/form-data" method="POST">

                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input name="titulo" id="titulo" type="text" placeholder="Titulo da Notícia" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <textarea name="mensagem" id="mensagem" class="form-control" cols="50" rows="10" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <input name="arquivo" id="arquivo" type="file" value="Enviar Imagem" class="btn btn-secondary btn-sm" required>
                            </div>


                            <input type="submit" name="Salvar" value="Criar Notícia" class="btn btn-primary">

                        </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
