<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Piloto</title>
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
            <a class="nav-link" >Nuevo Vehiculo</a>
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
if(isset($_GET['id']))
{
    $id= $_GET['id'];
}
else
{
    ?>
    <form method="POST" action="../controller/pilotoInterno.php" enctype="multipart/form-data">
    <h1>Datos del piloto</h1>
     <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
                <label>Apellido</label>
                <input name="apellido" type="text" class="form-control" placeholder="Apellido" require>
            </div>
            <div class="col-sm-4">
                <label>No.DPI</label>
                <input name="dpi" type="text" class="form-control" placeholder="DPI" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono</label>
                <input name="telefono1" type="text" class="form-control" placeholder="Telefono" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono 2</label>
                <input name="telefono2" value='N/A' type="text" class="form-control" placeholder="Telefono 2" require>
            </div>
            <div class="col-sm-4">
                <label>Correo</label>
                <input name="correo" value='N/A' type="text" class="form-control" placeholder="Correo" require>
            </div>
            
            <div class="col-sm-4">
                <br>
                <label>Imagen de DPI</label>
                <div class="container-fluid">
                    <input type="file" name="imgDPI">
                </div>
            </div>  
        </div>
        <br>

        <h1>Datos de licencia</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No. licencia</label>
                <input name="licencia" type="text" class="form-control" placeholder="No.licencia" require>
            </div>
            <div class="col-sm-4">
                <label>Tipo Licencia</label>
                <select name="tlicencia" id="" class="form-control">
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Imagen Licencia</label>
                <div class="container-fluid">
                    <input type="file" name="imglicencia">
                </div>
            </div>
        </div>
        <br>

        <h1>Datos del Pasaporte</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No.Pasaporte</label>
                <input name="pasaporte" type="text" class="form-control" value="N/A">
            </div>
            <div class="col-sm-4">
                <label>Imagen Pasaporte</label>
                <div class="container-fluid">
                    <input type="file" name="imgPasaporte">
                </div>
            </div>
        </div>
        <br>

        <h1>Datos del Caat</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No.Caat</label>
                <input name="caat" type="text" class="form-control"  value="N/A">
            </div>
            <div class="col-sm-4">
                <label>Imagen Caat</label>
                <div class="container-fluid">
                    <input type="file" name="imgCaat">
                </div>
            </div>            
        </div>

        
        <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <center>
                    <input type="submit" class="btn btn-success" value="Aceptar">
                    <a href="menu_nuevo_piloto.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                    <input type="submit" class="btn btn-danger" value="cancelar">
                    <br>
                    
                </center>
            </div>

    </form>
    <?php
}
?>
</div>
</div>
</body>
</html>