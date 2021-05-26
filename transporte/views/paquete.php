<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Paquete</title>
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
            <a class="nav-link" >Nuevo Paquete</a>
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
    ?>
    <form method="POST" action="../controller/paquete.php" enctype="multipart/form-data">
    <br>
    <br>
        <h1>Datos del Paquete</h1>
        <br>
        <div class="form-row">
            
            <div class="col-sm-4">
            <label>Peso</label>
                <input type="text" name="peso" class="form-control" placeholder="Peso del paquete"require>
            </div>
            <div class="col-sm-4">
            <label>Dirección de Entrega</label>
                <input type="text" name="direccione" class="form-control" placeholder="Lugar de destino" require>
            </div>
            <div class="col-sm-4">
            <label>Dirección de Envío</label>
                <input type="text" name="direccionenvi" class="form-control" placeholder="Lugar de envío">
            </div>


            <?php 
            include_once('../model/classpaquete.php');
                $tipo=new paquete();
                $dt=$tipo->Tipo_ruta();
            ?>
            <div class="col-sm-4">
                <label>Ruta</label>
                <select name="id_ruta" id="" class="form-control">
                <?php
                while($row=mysqli_fetch_array($dt)){
                    $valor=$row['id_ruta'];
                    $texto=$row['ruta'];
                    echo '<option  value="'.$valor.'">'.$texto.'</option>';
                }
                ?>
                </select>

            <br>
            <br>
            <div class="col-sm-4">
                <label>Descripción</label>
                <br>
                <textarea value='N/A' calss='form-control' name="descripcion" id="" cols="135" rows="3"></textarea>
            </div>
            <br>

                
        </div>  
        <br>
        
        </div>
            <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>
    </form>
    <?php

?>
</div>
</body>
</html>