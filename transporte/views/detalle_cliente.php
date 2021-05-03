<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Cliente</title>
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
            <a class="nav-link" >Detalles de Cliente</a>
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
<center>
<div class="wrapper fadeInDown col-sm-5">
  
          <div class="card-group">
              <div class="card bg-primary" style="width:400px">
            <div class="card-body">
              <h2 class="card-title" backgound="red">Nombre: Raúl Estrada</h2><br>
              <label>telefono 1: 12345678</label>  <br> 
              <label>telefono 2: N/A</label><br>
              <label>Empresa: Cementos Progreso</label><br>
              <label>Lugar: Guatemala</label>
              <label>No. DPI: 1234567891112</label><br>
            </div>
            <img class="card-img-bottom" src="../imagenes/images.jpg" alt="Card image" style="width:100%">
          </div>


            

          </div>
  </center>
          <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-dark" value="Editar">
                <a href="clientes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="submit" class="btn btn-danger" value="Eliminar">
                
            </center>
            </div>

</div>


</body>
</html>