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
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
        
    </ul>
</nav>
<br>
<br>
<?php
if(isset($_GET['P']))
{
    ?>
    <div class="container-fluid">
    <center>
    <div class="container-fluid  bg-primary"style="width:50rem;margin:20px 0 24px 0" >
    <?php
    $id=$_GET['id'];
    include_once("../controller/plataforma.php");
    $plataforma=new Plataforma();
    $detalle=$plataforma->VerUno($id);
    while ($row=mysqli_fetch_array($detalle)) {
    $id_plataforma=$row['id_plataforma'];
    $tamaño=$row['tamaño'];
    $color=$row['color'];
    $ejes=$row['ejes'];
    $peso=$row['peso'];
    $tipo=$row['tipo'];
    $estado_uso=$row['estado_uso'];
    $placa=$row['placa'];
    $ruta_imagen_targeta=$row['ruta_imagen_targeta'];
    $descripcion=$row['descripcion'];
    $tipo_interno=$row['tipo_interno_externo'];
    }
    ?>
    <h1>Datos de la plataforma: <?php ?></h1>
            <div class="card container-fluid">
                <div class="card-body container-fluid">
                    <h2 class="card-title">Tamaño: <?php echo $tamaño; ?></h2>
                    <h2 class="card-title">color: <?php echo $color ?></h2>
                    <h2 class="card-title">ejes: <?php  echo $ejes;?></h2>
                    <h2 class="card-title">peso: <?php echo $peso; ?></h2>
                    <h2 class="card-title">tipo: <?php echo $tipo?></h2>
                    <h2 class="card-title">estado de uso: <?php echo $estado_uso;?></h2>
                    <h2 class="card-title">No. placa: <?php echo $placa;?></h2>
                    <?php
                    if($tipo_interno=='1')
                    {
                       ?>
                        <h2 class="card-title">Propiedad: Externo</h2>
                       <?php  
                    }
                    else{
                        ?>
                        <h2 class="card-title">Propiedad: Interno</h2>
                        <?php
                    }
                    ?>
                    <h2 class="card-title">Descripcion: <?php echo $descripcion;?></h2>
                </div>
                <img src="<?php echo  $ruta_imagen_targeta;?>" style="width:100%" alt="">
            </div>
            <br>
            <br>
    </div>
    </center>

    <center>
        <a href="nuevo_vehiculo.php?id=<?php echo $id_plataforma?>&P"><button type="button" class="btn btn-success" >Modificar</button></a>
        <a href="vehiculos.php?P"><button type="button" class="btn btn-warning" >Regresar</button></a>       
    </center>
    </div>
    <?php
}
else
{
    if(isset($_GET['C']))
    {
        ?>
    <div class="container-fluid">
    <center>
    <div class="container-fluid  bg-primary"style="width:50rem;margin:20px 0 24px 0" >
    <?php
    $id=$_GET['id'];
    include_once("../controller/cabezales.php");
    $cabezal=new Cabezal();
    $detalle=$cabezal->VerUno($id);
    while ($row=mysqli_fetch_array($detalle)) {
    $id_cabezal=$row['id_vehiculo'];
    $marca=$row['marca'];
    $modelo=$row['modelo'];
    $tonelaje=$row['tonelaje'];
    $ruta_imagen_targeta=$row['ruta_imagen_tarjeta'];
    $placa=$row['no_placa'];
    $descripcion=$row['descripcion'];
    $tipo=$row['tipo_interno_externo'];
    $tamaño=$row['tamaño'];
    $ejes=$row['ejes'];
    $color=$row['color'];
   
    }
    ?>
    <h1>Datos del Cabezal <?php ?></h1>
            <div class="card container-fluid">
                <div class="card-body container-fluid">
                    <h2 class="card-title">Marca: <?php echo $marca; ?></h2>
                    <h2 class="card-title">Modelo: <?php echo $modelo;  ?></h2>
                    <h2 class="card-title">Peso: <?php echo $tonelaje;  ?></h2>
                    <h2 class="card-title">No. Placa: <?php echo $placa;  ?></h2>
                    <h2 class="card-title">Tamaño: <?php echo $tamaño;  ?></h2>
                    <h2 class="card-title">Ejes: <?php echo $ejes;  ?></h2>
                    <h2 class="card-title">Color: <?php echo $color;  ?></h2>
                    <?php
                    if($tipo=='1')
                    {
                       ?>
                        <h2 class="card-title">Propiedad: Externo</h2>
                       <?php  
                    }
                    else{
                        ?>
                        <h2 class="card-title">Propiedad: Interno</h2>
                        <?php
                    }
                    ?>
                    <h2 class="card-title">Descripcion: <?php echo $descripcion; ?></h2>
                </div>
                <img src="<?php echo $ruta_imagen_targeta; ?>" style="width:100%" alt="">
            </div>
            <br>
            <br>
    </div>
    </center>

    <center>
        <a href="nuevo_vehiculo.php?id=<?php echo $id_cabezal?>&C"><button type="button" class="btn btn-success" >Modificar</button></a>
        <a href="vehiculos.php?P"><button type="button" class="btn btn-warning" >Regresar</button></a>       
    </center>
    </div>
        <?php
    }
    else
    {
        ?>
            <div class="container-fluid">
    <center>
    <div class="container-fluid  bg-primary"style="width:50rem;margin:20px 0 24px 0" >
    <?php
    $id=$_GET['id'];
    include_once("../controller/camion.php");
    $cabezal=new Camion();
    $detalle=$cabezal->VerUno($id);
    while ($row=mysqli_fetch_array($detalle)) {
    $id_cabezal=$row['id_vehiculo'];
    $marca=$row['marca'];
    $modelo=$row['modelo'];
    $tonelaje=$row['tonelaje'];
    $ruta_imagen_targeta=$row['ruta_imagen_tarjeta'];
    $placa=$row['no_placa'];
    $descripcion=$row['descripcion'];
    $tipo=$row['tipo_interno_externo'];
    $tamaño=$row['tamaño'];
    $ejes=$row['ejes'];
    $color=$row['color'];
   
    }
    ?>
    <h1>Datos del Camion <?php ?></h1>
            <div class="card container-fluid">
                <div class="card-body container-fluid">
                    <h2 class="card-title">Marca: <?php echo $marca; ?></h2>
                    <h2 class="card-title">Modelo: <?php echo $modelo;  ?></h2>
                    <h2 class="card-title">Peso: <?php echo $tonelaje;  ?></h2>
                    <h2 class="card-title">No. Placa: <?php echo $placa;  ?></h2>
                    <h2 class="card-title">Tamaño: <?php echo $tamaño;  ?></h2>
                    <h2 class="card-title">Ejes: <?php echo $ejes;  ?></h2>
                    <h2 class="card-title">Color: <?php echo $color;  ?></h2>
                    <?php
                    if($tipo=='1')
                    {
                       ?>
                        <h2 class="card-title">Propiedad: Externo</h2>
                       <?php  
                    }
                    else{
                        ?>
                        <h2 class="card-title">Propiedad: Interno</h2>
                        <?php
                    }
                    ?>
                    <h2 class="card-title">Descripcion: <?php echo $descripcion; ?></h2>
                </div>
                <img src="<?php echo $ruta_imagen_targeta; ?>" style="width:100%" alt="">
            </div>
            <br>
            <br>
    </div>
    </center>

    <center>
        <a href="nuevo_vehiculo.php?id=<?php echo $id_cabezal?>&C2"><button type="button" class="btn btn-success" >Modificar</button></a>
        <a href="vehiculos.php"><button type="button" class="btn btn-warning" >Regresar</button></a>       
    </center>
    </div>
        <?php
    }
}
?>


</body>
</html>