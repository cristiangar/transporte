<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            <a class="nav-link" >Usuario: cliente</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<h1>Codigo de envio: 123456789</h1>
<br>
<div class="container mt-3">
<br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>codigo</th>
        <th>remitente</th>
        <th>Tel. remitente</th>
        <th>receptor</th>
        <th>Tel. receptor</th>
        <th>fecha de envio</th>
        <th>Estado envio</th>
        <th>tel. chofer</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>123456789</td>
        <td>Moe</td>
        <td>1234-5678</td>
        <td>Mary</td>
        <td>8765-4321</td>
        <td>12/05/2020</td>
        <td>En ruta</td>
        <td>1234-5678</td>
      </tr>
      <tr>
    </tbody>
  </table>
  <div class="form-group">
  <label for="comment">Comentario del chofer:</label>
  <textarea class="form-control" rows="5" id="comment">el paquete sufrira un atrazo por accidente en ruta</textarea>
</div>

</div>
  
  <div class="container-fluid">
                <br>
            <center>
                <a href="usuarios.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
            </center>
            </div>
</div>
</body>


</html>