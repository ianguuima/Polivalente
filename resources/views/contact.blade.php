@extends('layouts.app')

@section('title')
Contato
@endsection

@section('nav')
    <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('about')}}">Sobre</a>
    </li>

    <li class="nav-item active">
    <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contato</a>
    </li>
    
@endsection


<style>

.box{

    margin-top: 5.5rem;
    background-image: url('imgs/contact.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    color: white;

}

.box h1{
    color: #2894ed;
    font-weight: 700;
    text-transform: uppercase;
}

.box p{
    color: white;
    font-size: 24px;
}

.color{
    background-color: transparent;
}

.menu{
    padding-left: auto;
}


@media (min-width: 992px) {

.menu{
    padding-left: 20rem;
}

.ml-6{
    margin-left: 3rem;
}

}


</style>


@section('content')

<div class="shadow p-4 jumbotron jumbotron-fluid box">
    <div class="container text-center">
        <h1 class="display-4">Contato</h1>
        <p class="lead">Entre em contato conosco. Envie sugestões, reclamações e dúvidas. Elas serão respondas o mais breve possível!</p>
    </div>
</div>
<div class="row menu">
        <div class="d-inline col-lg-4 color p-2 m-3 shadow">
                @if(Session::has('mensagem_sucesso'))
                <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
             @endif
        <form class="mx-auto" method="POST" action="{{route('contato')}}">
            {{ csrf_field() }}
                    <h3 class="p-3 text-white text-center shadow-sm rounded-bottom" style="background-color: #3178b3">Contate-nos!</h3>
                    <div class="form-group">
                      <label for="email"><i class="fas fa-at"></i> Email</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
                      <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar essas informações.</small>
                    </div>
                    <div class="form-group">
                      <label for="nome"><i class="fas fa-question"></i> Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                    </div>

                    <div class="form-group">
                       <label for="telefone"><i class="fas fa-phone"></i> Telefone</label>
                       <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                    </div>

                    <div class="form-group">
                        <label for="mensagem"><i class="fas fa-envelope"></i> Mensagem</label>
                        <textarea class="form-control" required id="conteudo" name="conteudo" placeholder="Utilize este campo para enviar uma dúvida, sugestão, reclamação. Elas serão respondidas o mais rápido possível"></textarea>
                    </div>

                    <button type="submit" class="mt-3 btn btn-primary"><i class="fas fa-share"></i> Enviar!</button>
        </form>
</div>

    
<div class="ml-6 d-inline col-lg-5 color shadow p-5 mb-3">
    <div class="container mx-auto">
        <h1 class="p-3 text-white text-center shadow-sm rounded-bottom" style="background-color: #3178b3">Informações</h1>
        <div class="pt-3">
                <h4 class="mt-5"><i class="fas fa-phone"></i> <strong>Telefone</strong>: (32) 3741-3393</h4>
                <h4 class="mt-5"><i class="fas fa-map-marker-alt"></i> <strong>Endereço</strong>: Rua Altivo Bibiano, 300 - Santo Onofre, Carangola - MG, 36800-000</h4>
                <h4 class="mt-5 text-break"><i class="fas fa-envelope"></i> <strong>E-mail</strong>: escola.97012@educacao.mg.gov.br</h4>
        </div>
    </div>
</div>
 </div>


@endsection

