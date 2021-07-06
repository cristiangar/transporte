<?php
session_start();
if(isset($_SESSION['usuario']))
{
    $rol=$_SESSION['rol'];
    $us=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pilotos y vehiculos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            <a class="nav-link" >Usuario: <?php echo $us;?></a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<?php
  include_once("../controller/asignacion_vehiculo_empleado.php");
  $resultado=$dt->num_rows;
  if($resultado>0){

    ?>
      <h1>Lista de empleados y vehiculos asignados</h1>
      <br>
      <div class="container mt-3">
      <input class="form-control" id="myInput" type="text" placeholder="buscar..">
      <br>
      <table class="table table-dark table-striped table-hover table-responsive-sm" border="1" id="tabla_paginada" >
            <thead>
              <td>Piloto</td>
              <td>Telefono</td>
              <td>Tipo licencia</td>
              <td>Tipo Vehiculo</td>
              <td>No. placa vehiculo</td>
              <td>Detalle</td>
              <td>Eliminar</td>
            </thead>
      <?php
          while ($row=mysqli_fetch_array($dt)) {
            $id=$row['id_asignacion_vehiculo'];
            $piloto=$row['piloto'];
            $telefono=$row['telefono'];
            $licencia=$row['licencia'];
            $tipo_vehiculo=$row['tipo_vehiculo'];
            $placa=$row['no_placa'];
         ?>
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $piloto?></td>
                    <td><?php echo $telefono?></td>
                    <td><?php echo $licencia?></td>
                    <td><?php echo $tipo_vehiculo?></td>
                    <td><?php echo $placa?></td>
                    <td><center><a href="../Reportes/pdf_asignacion_vehiculo.php?id=<?php echo $id?>" target='_blank'><button type="button" class="btn btn-info">Ver e imprimir</button></a></center></td>
                    <td><center><a href="../controller/pilotoInterno.php?id=<?php echo $id?>&es=E"><button type="button" class="btn btn-danger">Eliminar</button></a></center></td>
                  </tr>
                 </tbody>
                 <?php
            }     
            
                ?>
                <tfoot>
                <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
                <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
                <td id="indicador_paginas"></td>
                <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
                <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
                </tfoot>
      </table>            
            <center>
                 <a href="choferes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>       
            </center>
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
      <br>
      <a href="choferes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
    </center>
    <?php
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
</html>
<?php
}

else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>