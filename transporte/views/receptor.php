<!DOCTYPE html>
<html>
<head>
    <title>Receptres</title>
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
  include_once("../controller/receptor.php");
  $resultado=$dt2->num_rows;
  if($resultado>0){
    ?>
      <h1>Receptor</h1>
      <br>
      <div class="container mt-3">
      <input class="form-control" id="myInput" type="text" placeholder="buscar..">
      <br>
      <table class="table table-dark table-striped table-hover table-responsive-sm border="1" id="tabla_paginada">

            <thead>
              <center><td>Nombre</td></center>
              <center><td>Apellido</td></center>
              <center><td>Teléfono</td></center>
              <center><td>Teléfono 2</td></center>
              <center><td>Modificar</td></center>
              <center><td>Eliminar</td></center>
            </thead>
      <?php
          while ($row=mysqli_fetch_array($dt2)) {
            $id=$row['id_receptor'];
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $telefono=$row['telefono'];
            $telefono2=$row['telefono2'];
            
            ?>
                  <tbody id="myTable">
                  <tr>

                    <td><?php echo $nombre?></td>
                    <td><?php echo $apellido?></td>
                    <td><?php echo $telefono?></td>
                    <td><?php echo $telefono2?></td>

                    <td><a href="nuevo_receptor.php?id=<?php echo $id?>"><button type="button" class="btn btn-warning">Modificar</button></a></td>
                    <td><a href="../controller/receptor.php?id=<?php echo $id?>&es=E"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                  </tr>
                 </tbody>
            <?php

          }
               
                echo '</table>';
            ?>
            <center>
                 <a href="nuevo_receptor.php"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
                
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
      <h1>no hay datos ingresados</h1>
      <a href="nuevo_receptor.php"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
      <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
    </center>
    <?php
  }
?>

</div>
</body>



</html>