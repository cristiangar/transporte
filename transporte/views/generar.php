<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Generar Envios</a>
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
    <h1>Datos del remitente</h1>
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
            <label>Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" require>
            </div>
        </div>
        <br>
        <h1>Datos del receptor</h1>
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
                <label>Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" require>
            </div>
            <div class="col-sm-4">
                <label>Direccion</label>
                <input type="text" class="form-control" placeholder="direccion" require>
            </div>
            <div class="col-sm-4">
                <label>Departamento</label>
                <select name="departamento" id="" class="form-control">
                    <option value="1">Guatemala</option>
                    <option value="2">Quetzaltenango</option>
                    <option value="3">San Marcos</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Municipio</label>
                <select name="municipio" id="" class="form-control">
                    <option value="1">Guatemala</option>
                    <option value="2">Quetzaltenango</option>
                    <option value="3">San Marcos</option>
                </select>
            </div>
            <br>
            <div class="container-fluid">
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="submit" class="btn btn-danger" value="cancelar">
                
            </center>
            </div>
        </div>
    </form>
</div>
</body>
</html>