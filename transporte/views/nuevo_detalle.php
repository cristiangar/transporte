<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Detalle</title>
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
            <a class="nav-link" >Nuevo Tipo Usuario</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" >Usuario: Admin</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
        
    </ul>

</nav>

   <?php  
   //busco los datos para acatualizar
   $id= $_GET['id2'];
    include_once("../model/classencabezado.php");
    $cliente=new encabezado();
    $dt=$cliente->VerUnDetalle($id);

    while ($row=mysqli_fetch_array($dt)) {
            $id2=$row['id_detalle'];
            $descripcion=$row['descripcion'];
            $subtotal=$row['subtotal'];
            $idenca=$row['id_encabezado'];
        }

        ?>
<div class="container-fluid col-sm-5">
<?php
if(isset($_GET['id']) and isset($_GET['mod'])and isset($_GET['id2'])){
     
     /*$idenvio=$_GET['idenvio'];*/
     
    
    include_once("../model/classencabezado.php");
    $cliente=new encabezado();
    $dt=$cliente->VerUnDetalle($id2);

    while ($row=mysqli_fetch_array($dt)) {
            $id2=$row['id_detalle'];
            $descripcion=$row['descripcion'];
            $subtotal=$row['subtotal'];
            $idenca=$row['id_encabezado'];
        }

        ?>
            <form method="POST" action="../controller/encabezado.php?id=<?php echo $id?>&mod" enctype="multipart/form-data">
    <br>
    <br>
        <center><h1>Modificar Detalle</h1></center>
        <br>
        <div class="form-row">
           

            
            <div class="col-sm-10">
            <label>Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="descripción del detalle" value="<?php echo $descripcion?>" require>
            </div>
                            
        </div>  
        <div class="col-sm-4">
            <label>Sub-total</label>
                <input type="text" name="subtotal" class="form-control" placeholder="Cantidad del Sub-Total" value="<?php echo $subtotal?>" require>
            </div>
        <br>
            

            <div class="col-sm-10">
            <label>Id Encabezado</label>
                <input type="text" name="idenca" class="form-control" placeholder="código encabezado" value="<?php echo $idenca?>" require hidden>
            </div>


        </div>
            <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="encabezado.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>
    </form>

        <?php


}
else
{

    ?>
    <form method="POST" action="../controller/encabezado.php?id=<?php echo $id?>" enctype="multipart/form-data">
    <br>
    <br>
        <h1>Nuevo Datalle</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-10">
            <label>Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del detalle" require>
            </div>
            <div class="col-sm-10">
            <label>Sub-Total</label>
                <input type="text" name="subtotal" class="form-control" placeholder="Cantidad del detalle" require>
            </div>
                
        </div>  
        <br>
        
        </div>
            <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="encabezado.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
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