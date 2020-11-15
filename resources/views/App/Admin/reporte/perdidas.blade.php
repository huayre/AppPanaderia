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
<div class="bg-dark m-2">
    <h2 class="row justify-content-center text-light text-center">LISTADO DE PERDIDAS</h2>
    <h3 class="text-center text-primary">PERDIDA TOTAL S/.{{$perdidatotal}}</h3>
</div>
<div class="table-responsive">
    <table class="table  table-hover w-100">
        <thead class="table-warning">
        <tr>
            <th>N°</th>
            <th>Motivo</th>
            <th>Cliente</th>
            <th>Tipo Comprobante</th>
            <th>Serie Comprobante</th>
            <th>Precío Compra</th>
            <th>Fecha Devolución</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Listaperdida as $cat)
            <tr>
                <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                <td>Devolución de Compra</td>
                <td>{{$cat->cliente->nombre}}</td>
                <td>{{$cat->tipo_comprobante}}</td>
                <td>{{$cat->serie_comprobante}}</td>
                <td>{{$cat->precio_compra}}</td>
                <td>{{$cat->fecha_compra}}</td>

            </tr>

        @endforeach
        </tbody>
    </table>


</div>

</body>
</html>



