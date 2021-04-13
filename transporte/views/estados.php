<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<h1>Buscar envios</h1>
<h3>por favor ingrese el codigo del envio para buscar el paquete</h3>
<br>
<div class="container mt-3">
<input class="form-control" id="myInput" type="text" placeholder="buscar..">
<br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>codigo</th>
        <th>ruta</th>
        <th>chofer</th>
        <th>estado</th>
        <th>Detalle</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>123456789</td>
        <td>Guatemala-Quetzaltenango</td>
        <td>Mary</td>
        <td>en ruta</td>
        <td>
            <a href="detalle.php">
                <button type="button" class="btn btn-primary">ver detalle</button>
            </a>
        </td>
      </tr>
      <tr>
        <td>987654321</td>
        <td>San Marcos-Guatemala</td>
        <td>Moe</td>
        <td>Recogiendo</td>
        <td>
            <a href="detalle.php">
                <button type="button" class="btn btn-primary">ver detalle</button>
            </a>
        </td>
      </tr>
      <tr>
        <td>1597536482</td>
        <td>San Marcos-Quetzaltenango</td>
        <td>anja</td>
        <td>en bodega</td>
        <td>
            <a href="detalle.php">
                <button type="button" class="btn btn-primary">ver detalle</button>
            </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
  
  <div class="container-fluid">
                <br>
            <center>
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
            </center>
            </div>
</div>
</body>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>