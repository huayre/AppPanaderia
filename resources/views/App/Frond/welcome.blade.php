@extends('layouts.portada.index')
@section('title','TOXVIC')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/frontend/welcome.css')}}">3d-corner-ribbons
@endsection
@section('contenido')
@include('layouts.portada.carrusel')

    <div class="my-5" >

        <h2 class="font-weight-light text-center text-primary"><i class="fas fa-shopping-bag" style="color:#B28E28"></i><strong>  MODELOS MAS VENDIDOS DE LA TEMPORADA </strong><i class="fas fa-shopping-bag" style="color:#B28E28"></i></h2>

        <div class="owl-carousel owl-theme ">
            @foreach($ListArticlesMasComprados as $art)
                <div class="item">
                    <div class="card shadow m-2">
                        <a href="{{route('detalleproducto',$art->id)}}" style="text-decoration: none">
                            @foreach($art->photos as $p)
                                @if($loop->index==0)

                                    <img src="{{$p->url}}" class="card-img-top" height="250px">

                                    <div class="ribbon ribbon-gree">
                                        <div class="banner">
                                            <div class="text text-center">Nuevo</div>
                                        </div>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                            <div class="card-body card-body-cascade text-center p-2">
                                <p class="card-text font-weight-lighter"><strong>{{$art->model}}</strong></p>
                                <!--Rating-->

                                <ul class="nav d-flex justify-content-center mb-1">
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <p class="card-text font-weight-lighter h4 " style="color:#000000"><strong>S/. {{$art->price}}</strong></p>


                            </div>

                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 class="font-weight-light  text-center mt-5 text-primary"><i class="fas fa-shopping-bag " style="color:#B28E28"></i><strong> NUEVOS MODELOS  </strong><i class="fas fa-shopping-bag" style="color:#B28E28"></i></h2>

        <div class="owl-carousel owl-theme">
            @foreach($ListArticlesMasComprados as $art)
                <div class="item">
                    <div class="card shadow m-2">
                        <a href="{{route('detalleproducto',$art->id)}}" style="text-decoration: none">
                            @foreach($art->photos as $p)
                                @if($loop->index==0)
                                    <img src="{{$p->url}}" class="card-img-top" height="250px">
                                    <div class="ribbon ribbon-gree">
                                        <div class="banner">
                                            <div class="text text-center">Nuevo</div>
                                        </div>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                            <div class="card-body card-body-cascade text-center p-2">
                                <p class="card-text font-weight-lighter"><strong>{{$art->model}}</strong></p>
                                <!--Rating-->

                                <ul class="nav d-flex justify-content-center mb-1">
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <p class="card-text font-weight-lighter h4" style="color:#000000"><strong>S/. {{$art->price}}</strong></p>


                            </div>

                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
@section('script')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    autoplayTimeout:2200
                },
                576:{
                    items:2
                },
                700:{
                    items:3
                },
                1100:{
                    items:4
                },
                1200:{
                    items:5
                }
            }
        })
    </script>
    <script>
         window.sr= ScrollReveal();
         sr.reveal('.header_principal_titulo',{
            duration:1000,
            origin:'right',
            distance:'400px'

        });

    </script>

@endsection



