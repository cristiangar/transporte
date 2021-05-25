<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Cliente</title>
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
            <a class="nav-link" >Nuevo Cliente</a>
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
<?php
if(isset($_GET['id'])){
     $id= $_GET['id'];
    //busco los datos para acatualizar
    include_once("../model/classcliente.php");
    $cliente=new cliente();
    $dt=$cliente->VerUnCliente($id);

    while ($row=mysqli_fetch_array($dt)) {
            $id=$row['id_cliente'];
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $telefono=$row['telefono'];
            $telefono2=$row['telefono2'];
            $correo=$row['correo'];
            $nit=$row['nit'];
            $nocuenta=$row['no_cuenta'];
            $nombre_cuenta=$row['nombre_cuenta'];
        }

        ?>
        <form method="POST" action="../controller/cliente.php?id=<?php echo $id?>">
    <br>
    <br>
        <h1>Datos del Cliente a modificar</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
            <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre?>" require>
            </div>
            <div class="col-sm-4">
            <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo 
                $apellido?>" require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 1</label>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono 1" value="<?php echo  $telefono?>" require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 2</label>
                <input type="text" name="telefono2" class="form-control" placeholder="Teléfono 2" value="<?php echo $telefono2?>">
            </div>
            <div class="col-sm-4">
            <label>Correo electronico</label>
                <input type="text" name="correo" class="form-control" placeholder="Nombre del banco" value="<?php echo $correo?>">
            </div>
            <div class="col-sm-4">
            <label>Nit</label>
                <input type="text" name="nit" class="form-control" placeholder="Número de DPI" value="<?php echo    $nit?>"require>
            </div>

            <div class="col-sm-4">
            <label>No. de Cuenta bancaria</label>
                <input type="text" name="cuenta" class="form-control" placeholder="Número de cuenta" value="<?php echo $nocuenta?>" require>
            </div>

            <div class="col-sm-4">
            <label>Banco del cliente</label>
                <input type="text" name="banco" class="form-control" placeholder="Nombre del banco" value = "<?php echo $nombre_cuenta?>" require>
            </div>

                
        </div>  
        <br>
        
        </div>
            <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="clientes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>
    </form>

        <?php


}
else
{
    ?>
    <form method="POST" action="../controller/cliente.php" enctype="multipart/form-data">
    <br>
    <br>
        <h1>Datos del Cliente</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
            <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
            <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido"require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 1</label>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono 1" require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 2</label>
                <input type="text" name="telefono2" value='N/A' class="form-control" placeholder="Teléfono 2">
            </div>
            <div class="col-sm-4">
            <label>Correo electronico</label>
                <input type="text" name="correo" class="form-control" placeholder="Nombre del banco">
            </div>
            <div class="col-sm-4">
            <label>Nit</label>
                <input type="text" name="nit" class="form-control" placeholder="Número de DPI" require>
            </div>

            <div class="col-sm-4">
            <label>No. de Cuenta bancaria</label>
                <input type="text" name="cuenta" class="form-control" placeholder="Número de cuenta" require>
            </div>

            <div class="col-sm-4">
            <label>Banco del cliente</label>
                <input type="text" name="banco" class="form-control" placeholder="Nombre del banco" require>
            </div>

                
        </div>  
        <br>
        
        </div>
            <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="clientes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>
    </form>
    <?php
}
?>
</div>
</body>
</html>