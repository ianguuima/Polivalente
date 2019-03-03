@extends('layouts/app')

@section('title')
Sobre
@endsection

@section('nav')
    <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="{{route('about')}}">Sobre</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contato</a>
        </li>
@endsection




@section('content')

<div class="row pb-5 pt-5">
    <div class="pt-5 mx-auto col-sm-12">
            <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{ asset('imgs/slide1.jpg') }}" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('imgs/slide2.jpg') }}" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
    </div>
</div>


<style>

.sobre p{
  font-size: 18px; 
}

</style>

<div class="row about">
        <div class="mx-auto text-center pt-5 sobre col-sm-6">
                <h1 class="border-bottom">A Escola</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat tellus sit amet interdum consequat. Suspendisse ut tortor vel leo volutpat lobortis. Maecenas dapibus tellus et ante convallis ultrices. Integer velit ipsum, hendrerit molestie blandit eu, finibus quis arcu. Ut ac nulla libero. Maecenas et efficitur tortor, et facilisis augue. Proin sed nulla vulputate, maximus ligula id, semper sem. Duis sed nibh sem. Donec sed lacus finibus, pellentesque lacus id, tincidunt ipsum. Nullam vitae lectus vestibulum, condimentum orci sed, tempus sapien. Pellentesque quis semper libero. Proin vel lacus justo. Morbi molestie quam neque, a dictum tellus finibus in. Quisque non velit sit amet ex sollicitudin convallis. Aenean dignissim laoreet augue sed egestas.  
                </p>

                <p class="ml-5"> 
                        Aliquam pellentesque leo velit, ac aliquam mauris sagittis a. Integer consectetur est ullamcorper, tristique magna eget, suscipit odio. Maecenas egestas scelerisque turpis eget venenatis. Mauris ornare venenatis sem, faucibus convallis urna viverra ut. Ut id fermentum enim. Nam rutrum sagittis elementum. Morbi aliquet libero felis, ac facilisis arcu sodales sit amet. Sed ultricies nisi at metus ullamcorper pellentesque. 
                </p>
        </div>
</div>

@endsection