<link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
<style>
    .navbar-dropdown a:hover { background:#F1F109; }

    .navbar-nav li:hover {
        background:#F1F109 ;
    }
    #textnacional{
        font-family: 'Damion', cursive;
        font-size: 38px;
        color:#C10920 ;
    }


</style>

    <div class="d-none d-md-block " style="background:#F1F109">
        <div class="container-fluid">
            <div class="p-2 row">
                <div class="col">
                    <a href="{{route('inicio')}}">
                        <img src="{{asset('images/empresa/logo_toxvic.png')}}" width="200px" class="ml-3">
                    </a>
                </div>
                <div class="col">
                    <h3 id="textnacional" class="text-center header_principal_titulo">Envios A Nivel Nacional</h3>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="https://www.facebook.com/toxvic/?modal=admin_todo_tour" target="_blank">
                    <span class="fa-stack" style="vertical-align: top;">
                      <i class="fas fa-circle fa-stack-2x  iconos_redes_sociales"></i>
                        <i class=" fab fa-facebook fa-stack-1x fa-inverse "></i>
                    </span>
                    </a>
                    <a href="https://www.instagram.com/?hl=es-la" target="_blank">
                    <span class="fa-stack" style="vertical-align: top;">
                      <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram  fa-stack-1x fa-inverse "></i>
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar  sticky-top navbar-expand-lg navbar-light bg-light" style="background:#000000">
        <div class="container-xl">
            <a class="navbar-brand d-md-none " href="{{route('inicio')}}">
                <img src="{{asset('images/empresa/logo_toxvic.png')}}" width="120" height="30" alt="" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color:#000000; font-size:28px;"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:#000000">
                <ul class="navbar-nav mr-auto" id="tamaño">
                    @foreach($ListCategory as $cat)
                        @if($cat->subcategories->count()>0)
                            <li class="nav-item dropdown navbar-item has-dropdown is-hoverable text-uppercase font-weight-bold ">
                                <a class="nav-link dropdown-toggle active " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    {{$cat->name}}
                                    <i class="fas fa-angle-down" style="color:#EB2713 "></i>
                                </a>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="navbarDropdown">
                                    @foreach($cat->subcategories as $sub)
                                            <a class="dropdown-item navbar-item " href="{{route('listsubcategorie',$sub->id)}}">{{$sub->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item text-uppercase font-weight-bold active">
                                <a class="nav-link" href="">{{$cat->name}}</a>
                            </li>
                        @endif

                    @endforeach
                </ul>
            </div>
        </div>

    </nav>
    <div style="height:2px;background:#F1F109"></div>

    </div>





