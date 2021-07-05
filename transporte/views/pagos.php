<!DOCTYPE html>
<html>
<head>
    <title>Pago Piloto</title>
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
  include_once("../controller/pagos.php");
  $resultado=$dt->num_rows;
  if($resultado>0){
    ?>
      <h1>Pagos a Pilotos</h1>
      <br>
      <div class="container mt-3">
      <input class="form-control" id="myInput" type="text" placeholder="buscar..">
      <br>
      <table class="table table-dark table-striped table-hover table-responsive-sm border="1" id="tabla_paginada">
            <thead>
              <td>Codigo Viaje</td>
              <td>Piloto</td>
              <td>Total</td>
              <td>Saldo</td>
              <td>Fecha Inicio</td>
              <td>Estado del Pago</td>
            </thead>
      <?php
          while ($row=mysqli_fetch_array($dt)) {
            $id=$row['id_cuentas_por_pagar'];
            $id2=$row['id_empleado'];
            $piloto=$row['nombre'];
            $total=$row['total_cancelar'];
            $saldo=$row['saldo'];
            $fecha=$row['fecha_inicio'];
            $estado_factura=$row['estado_cancelado'];
            $codigoviaje=$row['codigo_de_envio'];
            
            
            ?>
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $codigoviaje?></td>
                    <td><?php echo $piloto?></td>
                    <td><?php echo $total?></td>
                    <td><?php echo $saldo?></td>
                    <td><?php echo $fecha?></td>
                    
                    <?php
                      if($estado_factura == 0 or $estado_factura ==0){
                        ?>
                        <td><span class="badge badge-success">Cancelado</span></td>
                        <?php
                      }
                      else{
                        ?>
                        <td><span class="badge badge-danger">Pendiente</span></td>
                        <?php
                      }
                    ?>
                    
                    <td><center><a href="lista_abonos_pagos.php?id=<?php echo $id?>"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
                    <td><center><a href="nuevo_abono_pago.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">Nuevo Abono</button></a></center></td>
                    <td><a href="../controller/nuevo_cuenta_pagar.php?id=<?php echo $id?>&es=E"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
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
            <center>
                <a href="../envio/nuevo_cuenta_pagar.php"><button type="button" class="btn btn-success" >Nueva Cuenta</button></a> 
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>                
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
      <br>
      <a href="../envio/nuevo_cuenta_pagar.php"><button type="button" class="btn btn-success btn-lg" >Nueva Cuenta por Pagar</button></a> 
      <a href="secritaria.php"><button type="button" class="btn btn-warning btn-lg" >Regresar</button></a>
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