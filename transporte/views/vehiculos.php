<!DOCTYPE html>
<html>
<head>
    <title>Vehículos</title>
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
  <a href="secritaria.php">
      <img src="../imagenes/logo.png" alt="HTML tutorial" style="width:52px;height:52px;">
  </a>
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
  if(isset($_GET['P'])){/**plataforma */
    include_once('../controller/plataforma.php');
    $resultado=$dt->num_rows;
      if($resultado>0){
        ?>
          <h1>Listas de Equipo Especial</h1>
          <input class="form-control" id="myInput" type="text" placeholder="buscar..">
          <br>

          <table class="table table-dark table-striped table-hover table-responsive-sm" border="1" id="tabla_paginada">
                <thead>
                  <td>No.placa</td>
                  <td>tipo remolque</td>
                  <td>Modelo</td>
                  <td>Marca</td>
                  
                  <td>Detalle</td>
                  <td>Eliminar</td>
                </thead>
                <tbody id="myTable">
                  <?php
                  while($row=mysqli_fetch_array($dt) )
                  {
                    $id=$row['id_plataforma'];
                    $tipo=$row['tipo'];
                    $estado=$row['estado_uso'];
                    $placa=$row['placa'];
                    $propiedad=$row['tipo_interno_externo'];
                    $modelo=$row['modelo'];
                    $marca=$row['marca'];

                    ?>
                    <tr>
                    <td><?php echo $placa;?></td>
                    <td><?php echo $tipo;?></td>
                    <td><?php echo $modelo;?></td>
                    <td><?php echo $marca;?></td>
                    
                    
                    <td><center><a href="detalle_vehiculo.php?id=<?php echo $id?>&P"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
                    <td><center><a href="../controller/plataforma.php?id=<?php echo $id?>&es"><button type="button" class="btn btn-danger">Eliminar</button></a></center></td>
                    </tr>
                    <?php
                  }       
                  ?> 
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
        ?> 
        <center>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br><br><br><br>
          <h1>No hay datos ingresados</h1>
          <a href="nuevo_vehiculo.php?P"><button type="button" class="btn btn-success btn-lg" >Agregar Nuevo</button></a>
          <a href="menu_vehiculo.php"><button type="button" class="btn btn-warning btn-lg" >Regresar</button></a>
        </center>
        <?php
      }
  }
  else{
    if(isset($_GET['C'])){/**cabezal */
      include_once('../controller/cabezales.php');
      $resultado=$dt->num_rows;
      if($resultado>0)
      {
        ?>
          <h1>Listas de Vehiculos</h1>
          <input class="form-control" id="myInput" type="text" placeholder="buscar..">
          <br>

          <table class="table table-dark table-striped table-hover table-responsive-sm" border="1" id="tabla_paginada">
                <thead>
                  <td>Placas</td>
                  <td>Marca</td>
                  <td>Modelo</td>
                  <td>Tipo</td> 
                 
                  <td>Detalle</td>
                  <td>Eliminar</td>
                </thead>
                <tbody id="myTable">
                  <?php
                  while($row=mysqli_fetch_array($dt) )
                  {
                    $id=$row['id_vehiculo'];
                    $marca=$row['marca'];
                    $modelo=$row['modelo'];
                    $placa=$row['no_placa'];
                    $propiedad=$row['tipo_interno_externo'];
                    $estado=$row['estado_vehiculo'];
                    $tipo=$row['tipo_vehiculo']
                    ?>
                    <tr>
                    <td><?php echo $placa;?></td>
                    <td><?php echo $marca;?></td>
                    <td><?php echo $modelo;?></td>
                    <td><?php echo $tipo;?></td>
                    
                    
                    <td><center><a href="detalle_vehiculo.php?id=<?php echo $id?>&C"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
                    <td><center><a href="../controller/cabezales.php?id=<?php echo $id?>&es"><button type="button" class="btn btn-danger">Eliminar</button></a></center></td>
                    </tr>
                    <?php
                  }       
                  ?> 
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
          <center>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br><br><br><br>
          <h1>No hay datos ingresados</h1>
          <a href="nuevo_vehiculo.php?C"><button type="button" class="btn btn-success btn-lg" >Agregar Nuevo</button></a>
          <a href="menu_vehiculo.php"><button type="button" class="btn btn-warning btn-lg" >Regresar</button></a>
        </center>
          <?php
      }
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