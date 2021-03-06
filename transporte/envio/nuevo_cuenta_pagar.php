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
    <title>Nueva Cuenta por Pagar</title>
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
    <a href="../views/secritaria.php">
        <img src="../imagenes/logo.png" alt="HTML tutorial" style="width:52px;height:52px;">
    </a>
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Nueva Cuenta</a>
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

    <form method="POST" action="../controller/nuevo_cuenta_pagar.php" >
      <h1>Nueva Cuenta por Pagar</h1>
      <br>
      <br>
      <h2>Seleccionar Viaje</h2>
      <br>
      <div class="form-row">


                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Seleccione Viaje" id="pagina9" return false; name="Piloto">
                    <div class="input-group-append">
                      <button class="input-group-text btn-btn-primary" id="boton9">Viajes</button>
                    </div>
                  </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-5">
                    <label>Piloto</label>
                    <input type="text" name="total" class="form-control" placeholder="Nombre del piloto" id="pagina10" return false; name="Piloto">
                </div>
            </div>
                <div class="form-row">
                <div class="col-sm-5">
                    <label>Adelanto</label>
                    <input type="text" name="total" class="form-control" placeholder="Adelanto" id="pagina11" return false;>
                </div>

                <div class="col-sm-5">
                    <label>Complemento</label>
                    <input type="text" name="anticipo" class="form-control" placeholder="Pendiente de pago" id="pagina12" return false;>
                </div>
            </div>
      </div>
      <br>
      
      </div>
      <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="../views/pagos.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>

<script src="../js/padrepago.js"></script> 
    </form>

</div>
</body>
</html>
<?php
}

else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>