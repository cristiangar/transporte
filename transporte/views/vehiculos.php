<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Piloto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/index.js"></script>
    <link href="../css/index.css" rel="stylesheet"/>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Lista de Veiculos</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
        
    </ul>
</nav>

<div class="container-fluid">
<br>
<div class="container mt-3">
<?php
  if(isset($_GET['P'])){
    ?>
      <h1>Listas de Plataformas</h1>
      <input class="form-control" id="myInput" type="text" placeholder="buscar..">
      <br>

      <table class="table table-bordered" border="1" id="tabla_paginada">
            <thead>
              <td>No. Placa</td>
              <td>Marca</td>
              <td>Tipo</td>
              <td>Estado</td>
              <td>Detalle</td>
            </thead>
            <tbody id="myTable">
              <tr>
                <td>Jorge</td>
                <td>Campos</td>
                <td>4088-1056</td>
                <td>Disponible</td>
                <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
              </tr> 
            </tbody>
            <tfoot>
              <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
              <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
              <td id="indicador_paginas"></td>
              <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
              <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
            </tfoot>
          </table>
          <div class="container-fluid">
                <br>
            <center>
                <a href="nuevo_vehiculo.php?P"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
                <a href="menu_vehiculo.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
            </center>
            </div>

    <?php
  }
  else{
    if(isset($_GET['C'])){
      ?>
        <h1>Lista de Cabezales</h1>
        <input class="form-control" id="myInput" type="text" placeholder="buscar..">
        <br>

        <table class="table table-bordered" border="1" id="tabla_paginada">
              <thead>
                <td>No. Placa</td>
                <td>Marca</td>
                <td>Tipo</td>
                <td>Estado</td>
                <td>Detalle</td>
              </thead>
              <tbody id="myTable">
                <tr>
                  <td>Jorge</td>
                  <td>Campos</td>
                  <td>4088-1056</td>
                  <td>Disponible</td>
                  <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
                </tr> 
              </tbody>
              <tfoot>
                <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
                <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
                <td id="indicador_paginas"></td>
                <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
                <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
              </tfoot>
            </table>
            <div class="container-fluid">
                <br>
            <center>
                <a href="nuevo_vehiculo.php?C"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
                <a href="menu_vehiculo.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
            </center>
            </div>
      <?php
    }
    else{
      ?>
      <h1>Lista de Camiones</h1>
        <input class="form-control" id="myInput" type="text" placeholder="buscar..">
        <br>

        <table class="table table-bordered" border="1" id="tabla_paginada">
              <thead>
                <td>No. Placa</td>
                <td>Marca</td>
                <td>Tipo</td>
                <td>Estado</td>
                <td>Detalle</td>
              </thead>
              <tbody id="myTable">
                <tr>
                  <td>Jorge</td>
                  <td>Campos</td>
                  <td>4088-1056</td>
                  <td>Disponible</td>
                  <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
                </tr> 
              </tbody>
              <tfoot>
                <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
                <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
                <td id="indicador_paginas"></td>
                <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
                <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
              </tfoot>
            </table>

            <div class="container-fluid">
                <br>
            <center>
                <a href="nuevo_vehiculo.php?C2"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
                <a href="menu_vehiculo.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
            </center>
            </div>
</div>
      <?php
    }
  }
?>
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

</body>
</html>