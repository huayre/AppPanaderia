<style>
    @media(min-width: 200px) {
        .imagen{
            height:200px;
        }
    }

   @media(min-width: 576px) {
       .imagen{
           height:250px;
       }
   }
   @media(min-width:768px) {
       .imagen{
           height:300px;
       }
   }
   @media(min-width:992px) {
       .imagen{
           height:400px;
       }
   }
   @media(min-width:1200px) {
       .imagen{
           height: 470px;
       }
   }
   .controles{
       color:#1ABC9C;
   }
    /*cambiar color del indicador carrusel*/
    ol.carousel-indicators {
        position: absolute;
        bottom: 5px;
        margin: 0;
        left: 0;
        right: 0;
        width: auto;
    }

    ol.carousel-indicators li,
    ol.carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 0;
        border-radius: 50%;
        border: 0;
        background: transparent;
    }

    ol.carousel-indicators li {
        background: rgba(255,255,255,0.39);
        margin-left: .5rem;
        margin-right: .5rem;
    }

    ol.carousel-indicators li.active {
        background:#1ABC9C;
    }

</style>
<div>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" >
            @foreach($ListCarrusel as $car)
                <li data-target="#carouselExampleInterval" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($ListCarrusel as $car)
                <div class="carousel-item @if($loop->index==0) active @endif" data-interval="1500">
                    <img src="{{$car->url}}" class="w-100 imagen" alt="imagen_carousel">
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <i class="fas fa-chevron-left fa-2x controles"></i>
        </a>
        <a class="carousel-control-next " href="#carouselExampleInterval" role="button" data-slide="next">
            <i class="fas fa-chevron-right fa-2x controles "></i>
        </a>
    </div>
    <div style="height:1px;background:#F1F109"></div>
</div>
