<!DOCTYPE html>
<html>
<head>
    <title>Abonos</title>
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
            <a class="nav-link" >Usuario: Admin</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<?php
  if(isset($_GET['id'])){
     $id= $_GET['id'];
    //busco los datos para mostrar
    include_once("../model/classcuenta.php");
    $cliente=new cuenta();
    $dt=$cliente->VerUnCliente($id);

    
            
        /*}*/

        ?>
        <form method="POST" action="../controller/cuentas.php?id2=<?php echo $id2?>">
          <center>
            <br>
          <h1>Listado de Abonos</h1>
          </center>
      <br>
      <table class="table table-dark table-striped table-hover table-responsive-sm border="1" id="tabla_paginada">

            <thead> 
              <center><td>Cantidad</td></center>
              <center><td>Fecha</td></center>
              <center><td>Eliminar</td></center>
            </thead>
          
      <?php
          /*while ($row=mysqli_fetch_array($dt)) {
            $id=$row['id_abonos']
            $cantidad=$row['cantidad'];
            $fecha=$row['fecha'];*/

            while ($row=mysqli_fetch_array($dt)) {
            $id2=$row['id_abonos'];
            $cantidad=$row['cantidad'];
            $fecha=$row['fecha_abono']; 
            ?>
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $cantidad?></td>
                    <td><?php echo $fecha?></td>
           
                    <td><a href="../controller/cuentas.php?id2=<?php echo $id2?>&es=E&id=<?php echo $id?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                  </tr>
                 </tbody>
            <?php

          }
               
                echo '</table>';
            ?>
            <center>
                <a href="nuevo_abono.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">Abonar</button></a>
                
                <a href="cuentas.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
                
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
      <h1>no hay datos ingresados</h1>
      <a href="nuevo_abono.php"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
      <a href="cuentas.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
    </center>
    <?php
  }
?>

</div>
</body>



</html>