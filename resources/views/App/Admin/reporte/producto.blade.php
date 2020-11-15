<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="bg-dark mb-2 ">
    <h2 class="row justify-content-center text-light text-center ">LISTADO DE PRODUCTOS EN ALMACÉN</h2>
</div>
<div class="table-responsive">
    <table class="table  table-hover w-100" >
        <thead class="table-success">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Stock</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listaproductos as $art)
            <tr>
                <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                <td >{{$art->name}}</td>
                <td>{{$art->stock}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>


</div>

</body>
</html>
