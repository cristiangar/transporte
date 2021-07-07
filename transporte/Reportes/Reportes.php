<?php
session_start();
if(isset($_SESSION['usuario']))
{
    $rol=$_SESSION['rol'];
    $us=$_SESSION['usuario'];
    if($rol=="ADMINISTRADOR")/**if rol de usuario */
    {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a href="../views/secritaria.php">
        <img src="../imagenes/logo.png" alt="HTML tutorial" style="width:52px;height:52px;">
    </a>
    <ul class="navbar-nav ml-auto">
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
    if(isset($_GET['cliente']))
    {
        ?>
        <br>
        <h1>Busqueda de reporte</h1>
        <br>
        <form method="POST" action="ReporteGeneral.php?cliente">
            <div class="form-row">
                <div class="col-sm-4">
                    <label>Fecha inicio</label>
                    <input name="finicio" type="date" class="form-control" require>
                </div>
                <div class="col-sm-4">
                    <label>Fecha final</label>
                    <input name="ffinal" type="date" class="form-control" require>
                </div>
            </div>
            <br>
            <label>Tipo de reporte</label>
                <select name='tipo' class="form-control">
                    <option value='0'>General</option>
                    <option value='1'>Por cliente</option>
                </select>
                <br>
                <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="BusquedaReporte.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                </center>
        </form>
        <?php

    }

?>
</div>
</body>
</html>

<?php
           
    }/**administrador */

}/**usuario */
else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>