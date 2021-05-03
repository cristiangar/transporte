<!DOCTYPE html>
<html>
<head>
    <title>Menú Nuevo Piloto</title>
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
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
<a href="secritaria.php">
    <img src="../imagenes/logo.png" alt="HTML tutorial" style="width:52px;height:52px;">
</a>
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>

<div class="container-fluid">

    <br>
    <br>
    <br>
    <div class="row">
        
        <div class="wrapper fadeInDown col-sm-6"><!--efecto de caida-->
            <div id="formContent"><!--contenedor-->
                <div class="fadeIn first">
                    <a href="nuevo_piloto.php">
                        <img class="conimagen" id="conimg"src="../imagenes/piloto.jpg" id="icon" alt="User Icon" style="
                        max-width:60%;width:auto;height:auto;"/>

                    </a>
                    <h1>Piloto Interno</h1>
                </div>
            </div>
        </div>

        <div class="wrapper fadeInDown col-sm-5"><!--efecto de caida-->
            <div id="formContent"><!--contenedor-->
                <div class="fadeIn first">
                    <a href="nuevo_piloto_tercero.php">
                        <img class="img-fluid" src="../imagenes/chofer1.png" id="icon" alt="User Icon" style="max-width:50%;width:auto;height:auto;">    
                    </a>
                    <h1>Piloto Independiente</h1>
                </div>
            </div>
        </div>


        <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
            <center>
                <a href="choferes.php"><button type="button" class="btn btn-warning btn-lg">Regresar</button></a>
                <br>  
            </center>
            </div>

    </div>

</div>

</body>
</html>