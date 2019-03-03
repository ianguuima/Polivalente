@extends('layouts.app')

@section('title')
Login
@endsection

@section('nav')
    <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('about')}}">Sobre</a>
    </li>


    <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contato</a>
    </li>
</li>
@endsection



<style>

.pad{
    margin-top: 15vh;
    height: auto;
    margin-bottom: 5vh; 
}


.login{
    height: auto;
    background-color: transparent;
}


@media (min-width: 992px) {


.login form{
    top: 10px;
}

.login{
    background-color: transparent;
    height: 87.2vh;
}

}




</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login col-md-8 pt-4">
            <div class="mx-auto card pad">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar?') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection