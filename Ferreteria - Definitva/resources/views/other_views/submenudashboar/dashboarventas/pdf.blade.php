<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
          text-align: center;
          margin-top: 50px;
        }
    
        h1 {
          font-size: 24px;
          font-weight: bold;
          color: #fffcfc;
          margin-bottom: 20px;
          background-color: #030303;
        }
    
        table {
          margin: 0 auto;
          width: 80%;
        }
    
        th {
          font-weight: bold;
        }
    
        td {
          padding: 8px;
        }
    
        /* Estilos alternativos para filas pares e impares */
        tbody tr:nth-child(even) {
          background-color: #f2f2f2;
        }
    
        tbody tr:nth-child(odd) {
          background-color: #e6e6e6;
        }
      </style>

</head>
 <h1>Reportes de ventas</h1>
<body>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre del cliente</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Precio del producto</th>
                <th>Unidades</th>

            </tr>
        </thead>


        <tbody>

            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->Nombre_Cliente }}</td>
                    <td>{{ $venta->Descripcion }}</td>
                    <td>{{ $venta->Categoria }}</td>
                    <td>{{ $venta->Precio }}</td>
                    <td>{{ $venta->Cantidad }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>