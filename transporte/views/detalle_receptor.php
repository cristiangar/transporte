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
    <title>Receptor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/imagen.css">
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
            <a class="nav-link" >Receptor</a>
        </li>
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
if(isset($_GET['id'])){
     $id= $_GET['id'];
     $envio=$_GET['envio'];
    //busco los datos para acatualizar
    include_once("../model/classreceptor.php");
    $detalle=new Receptor();
    $dt=$detalle->VerUnReceptor($id);

    while ($row=mysqli_fetch_array($dt)) {
            $id=$row['id_receptor'];
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $telefono=$row['telefono'];
            $telefono2=$row['telefono2'];
        }
?>

    <br>
    <br>
        <h1>Detalle del cliente</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
            <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre?>" readonly>
            </div>
            <div class="col-sm-4">
            <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo $apellido?>" readonly>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 1</label>
            <input type="tel" name="telefono" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13" value="<?php echo  $telefono?>" readonly>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 2</label>

                <input type="tel" name="telefono2" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13" value="<?php echo  $telefono2?>" readonly>
            </div>


      
        </div>  
        <br>
        
      
        <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <a href="detalleEnvio.php?id=<?php echo $envio;?>"><button class="btn btn-warning">Regresar</button></a> 
            </center>
        </div>
<?php
}
?>

</div>
</body>
</html>
<?php
}

else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>