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
    <title>Detalles de Piloto</title>
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
            <a class="nav-link" >Detalles de Piloto</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" >Usuario: <?php echo $us;?></a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
        
    </ul>
</nav>
<br>
<br>
<div class="container-fluid">
<center>
<div class="container-fluid  bg-primary"style="width:50rem;margin:20px 0 24px 0" >
<?php
$id=$_GET['id'];
include_once("../controller/pilotoInterno.php");
$piloto=new Piloto();
$dt=$piloto->VerUno($id);
while ($row=mysqli_fetch_array($dt)) {
  $id_empleado=$row['id_empleado'];
  $nombre=$row['nombre'];
  $apellido=$row['apellido'];
  $dpi=$row['dpi'];
  $telefono1=$row['telefono1'];
  $telefono2=$row['whatsApp'];
  $licencia=$row['licencia'];
  $tipo_licencia=$row['tipo_licencia'];
  $pasaporte=$row['pasaporte'];
  $ruta_imagen_licencia=$row['ruta_imagen_licencia'];
  $ruta_imagen_pasaporte=$row['ruta_imagen_pasaporte'];
  $ruta_imagen_dpi=$row['ruta_imagen_dpi'];
  $correo=$row['correo'];
  $banco=$row['banco'];
  $cuenta=$row['cuenta_bancaria'];
  $nombre_emergencia=$row['contacto_emergencia_nombre'];
  $numero_emergencia=$row['contacto_emergencia_numero'];
  $nombre_cuenta=$row['nombre_cuenta'];
  $tipo_cuenta=$row['tipocuenta'];
  $fecha_licencia=$row['fecha_licencia'];


  }
?>
<h1>Nombre del piloto: <?php echo $nombre." ".$apellido;?></h1>
        <div class="card container-fluid">
            <div class="card-body container-fluid">
                <h2 class="card-title">DPI: <?php echo $dpi;?></h2>
                <h2 class="card-title">Telefono: <?php echo $telefono1;?></h2>
                <h2 class="card-title">WhatsApp: <?php echo $telefono2;?></h2>
                <h2 class="card-title">Banco: <?php echo $banco;?></h2>
                <h2 class="card-title">Cuenta Bancaria: <?php echo $cuenta;?></h2>
                <h2 class="card-title">Nombre cuentahabiente: <?php echo $nombre_cuenta;?></h2>
                <h2 class="card-title">tipo de cuenta: <?php echo $tipo_cuenta;?></h2>
                <h2 class="card-title">Contacto de emergencia: <?php echo $nombre_emergencia;?></h2>
                <h2 class="card-title">No. contacto de emergencia: <?php echo $numero_emergencia;?></h2>
                <h2 class="card-title">Correo electronico: <?php echo $correo;?></h2>
            </div>
            <img src="<?php echo  $ruta_imagen_dpi;?>" style="width:100%" alt="">
        </div>
        <br>

        <div class="card container-fluid">
            <div class="card-body">
                <h2 class="card-title">No. licencia: <?php echo $licencia;?></h2>
                <h2 class="card-title">Tipo de licencia: <?php echo $tipo_licencia;?></h2>
                <h2 class="card-title">Fecha de vencimiento: <?php echo $fecha_licencia;?></h2>
            </div>
            <img src="<?php echo  $ruta_imagen_licencia;?>" style="width:100%" alt="">
        </div>
        <br>
        <div class="card container-fluid">
            <div class="card-body">
                <h2 class="card-title">No. pasaporte: <?php echo $pasaporte;?></h2>
            </div>
            <img src="<?php echo  $ruta_imagen_pasaporte;?>" style="width:100%" alt="">
        </div>
        <br>
</div>
</center>

<center>
    <?php
    if(isset($_GET['id']) and isset($_GET['envio']) ){
        $envio=$_GET['envio'];
        ?>
        <a href="detalleEnvio.php?id=<?php echo $envio;?>"><button type="button" class="btn btn-warning" >Regresar</button></a>     
        <?php
    }
    else
    {
        ?>
            <a href="nuevo_piloto.php?id=<?php echo $id_empleado?>"><button type="button" class="btn btn-success" >Modificar</button></a>
            <a href="choferes.php"><button type="button" class="btn btn-warning" >Regresar</button></a> 
        <?php

    }
    ?>      
</center>
</div>
</body>
</html>
<?php
}

else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>