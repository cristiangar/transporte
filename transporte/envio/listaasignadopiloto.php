<!DOCTYPE html>
<html>
<head>
    <title>Pilotos con Vehiculo</title>
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
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<?php
  include_once("../controller/datos.php");
  $resultado=$dt7->num_rows;
  if($resultado>0){
    ?>
      <h1>Lista de Pilotos con Vehículo Asignado</h1>
      <br>
      <div class="container mt-3">
      <input class="form-control" id="myInput" type="text" placeholder="buscar..">
      <br>
      <table class="table table-dark table-striped table-hover table-responsive-sm border="1" id="tabla_paginada">
            <thead>
              <td>Nombre del Piloto</td>
              <td>Tipo de Vehículo</td>
              <td>Plataforma</td>
              <td>Fecha Asignación</td>
              <td>Observaciones</td>
              
            </thead>
      <?php
          while ($row=mysqli_fetch_array($dt7)) {
            $id=$row['id_asignacion_vehiculo'];
            $ide=$row['id_empleado'];
            $idv=$row['id_vehiculo'];
            $idp=$row['id_plataforma'];
            $nombre=$row['nombre'];
            $tipo=$row['tipo_vehiculo'];
            /*$plataforma=$row['Plataforma'];*/
            $fecha=$row['fecha_asignacion'];
            $observaciones=$row['observacion'];
            ?>
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $nombre?></td>
                    <td><?php echo $tipo?></td>
                    <?php
                    if($idp==null){
                      ?>
                      <td><span>Sin Platafomra</span></td>
                      <?php
                    }
                    else{
                      ?>
                      <td><span>Con Plataforma</span></td>
                      <?php
                    }

                    ?>
                    
                    <td><?php echo $fecha?></td>
                    <td><?php echo $observaciones?></td>
                    <td><center><a href="listaasignadopiloto.php?ide=<?php echo $ide?>&no=<?php echo $nombre?>& idv=<?php echo $idv?>& no2=<?php echo $tipo?>& idp=<?php echo $idp?>&id=<?php echo $id?>"> <button type="button" class="btn btn-primary">Seleccionar</button></a></center></td>
                  </tr>
                 </tbody>
            <?php

          }
               echo '<tfoot>';
                echo  '<td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>';
                echo  '<td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>';
                echo  '<td id="indicador_paginas"></td>';
                echo  '<td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>';
                echo  '<td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>';
                echo'</tfoot>';
                echo '</table>';
                ?>

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
      <a href="../view/nuevo_cliente.php"><button type="button" class="btn btn-success btn-lg" >Agregar Nuevo</button></a>
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



<?php
    if (isset($_GET['ide'])){
      session_start();
      $valor=$_GET['id'];
      $valor1=$_GET['ide'];
      $nombre=$_GET['no'];
      $valor2=$_GET['idv'];
      $nombre2=$_GET['no2'];
      $valor3=$_GET['idp'];
      /*$nombre3=$_GET['no3'];*/

      $_SESSION['idasignacion']=$valor;
      ?>
          <h2>Piloto seleccionado: <?php echo $nombre ?></h2>
          <input value='<?php echo $nombre." ".$nombre2;?>' type="text" id="P6" placeholder="Enviar al padre" hidden>&nbsp;     
          <label for="">Precione el boton aceptar para continuar</label> <br>
          <button class='btn btn-success btn-lg' id='btnp6' onclick="window.close();">Aceptar</button>
      <?php
    }
    ?>
    <br>
    <script src="../js/hija6.js"></script>

</html>