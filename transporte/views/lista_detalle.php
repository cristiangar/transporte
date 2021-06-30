<!DOCTYPE html>
<html>
<head>
    <title>Detalles</title>
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
  if(isset($_GET['id'])){/*este id es mi id_encabezado*/
     $id= $_GET['id'];
     $cliente1=$_GET['cliente'];
     $codigo=$_GET['envio'];
     $total=$_GET['total'];
     $saldo=$_GET['saldo'];
     $estado_factura=$_GET['estadof'];
    //busco los datos para mostrar
    include_once("../model/classencabezado.php");
    $cliente=new encabezado();
    $dt=$cliente->VerDetalles($id);
        ?>
      <h1>Cliente:       <?php echo $cliente1; ?></h1>
      <h2>codigo envio:  <?php echo $codigo; ?></h2>
      <h2>total a pagar: <?php echo $total; ?></h2>
      <h2>saldo:         <?php echo $saldo ?></h2>
      <h2>estado de la factura: <?php echo $estado_factura;?></h2>
      <table class="table table-dark table-striped table-hover table-responsive-sm border=1" id="tabla_paginada">
      <h3>Listado de Detalles</h3>
            <thead> 
              <center><td>Descripción</td></center>
              <center><td>Sub-Total</td></center>
            </thead>       
      <?php

            while ($row=mysqli_fetch_array($dt)) {
            $id2=$row['id_detalle'];
            $descripcion=$row['descripcion'];
            $subtotal=$row['subtotal']; 
            $id=$row['id_encabezado'];
            ?>
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $descripcion?></td>
                    <td><?php echo $subtotal?></td> 
                    <td><center><a href="nuevo_detalle.php?id=<?php echo $id?>&mod=M&id2=<?php echo $id2?>"><button type="button" class="btn btn-warning">Modificar</button></a></center></td>
                    <td><a href="../controller/encabezado.php?id2=<?php echo $id2?>&es=E&id=<?php echo $id?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                  </tr>
                 </tbody>
            <?php

          }
               
                echo '</table>';
            ?>
            <center>
                <?php
                  if($estado_factura == 'Cancelado' or $estado_factura =='cancelado')
                  {
                    ?>
                     <a href="../Reportes/recibo.php?id=<?php echo $id;?>"target='_blank'><button type="button" class="btn btn-info" >Imprimir</button></a> 
                     <a href="nuevo_detalle.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">Nuevo Detalle</button></a>
                     <a href="encabezado.php"><button type="button" class="btn btn-warning" >Regresar</button></a> 
                    <?php

                  }
                  else{
                    ?>
                    <a href="nuevo_detalle.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">Nuevo Detalle</button></a>
                    <a href="encabezado.php"><button type="button" class="btn btn-warning" >Regresar</button></a> 
                    <?php
                  }
                ?>
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