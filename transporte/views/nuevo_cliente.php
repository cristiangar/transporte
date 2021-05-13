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
    <form action="">
        <h1>Datos del Cliente</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
            <label>Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
            <label>Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido"require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 1</label>
                <input type="text" class="form-control" placeholder="Telefono 1" require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 2</label>
                <input type="text" class="form-control" placeholder="Teléfono 2" require>
            </div>
            <div class="col-sm-4">
            <label>Correo electronico</label>
                <input type="text" class="form-control" placeholder="Nombre del banco" require>
            </div>
            <div class="col-sm-4">
            <label>Nit</label>
                <input type="text" class="form-control" placeholder="Número de DPI" require>
            </div>

            <div class="col-sm-4">
            <label>No. de Cuenta bancaria</label>
                <input type="text" class="form-control" placeholder="Número de cuenta" require>
            </div>

            <div class="col-sm-4">
            <label>Banco del cliente</label>
                <input type="text" class="form-control" placeholder="Nombre del banco" require>
            </div>

            <div class="col-sm-4">
            <br>
            <label>Imagen de DPI</label>
            <div class="container-fluid">
                <input type="file" name="imagen">
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
                <a href="clientes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="submit" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>
    </form>
</div>
</body>
</html>