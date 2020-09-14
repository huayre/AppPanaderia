<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('images/empresa/logo_navegador.png')}}" type="image/icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap4.5/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frond.css')}}">
    <link rel="stylesheet" href="{{asset('packages/owl_carousel/owl.carousel.css')}}">

    @yield('styles')
</head>
<style>
    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

</style>

<body>

             @include('layouts.portada.header')
             @yield('contenido')
              @include('layouts.portada.chatredessociales')
             @include('layouts.portada.footer')


        <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<link rel="stylesheet" href="{{asset('css/frontend/3d-corner-ribbons.css')}}">
<script src="{{asset('packages/jquery-3.5.1/jquery-3.5.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('bootstrap4.5/js/bootstrap.js')}}"></script>
<script src="{{asset('packages/owl_carousel/owl.carousel.js')}}"></script>
<script src="https://unpkg.com/scrollreveal"></script>

@yield('script')
</body>
</html>

