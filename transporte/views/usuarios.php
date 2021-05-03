<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../css/index.css" rel="stylesheet"/>
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
            <a class="nav-link" >Usuario: Administrador</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<h1>Lista de Usuarios</h1>
<br>
<div class="container mt-3">
<input class="form-control" id="myInput" type="text" placeholder="buscar..">
<br>
<table class="table table-bordered" border="1" id="tabla_paginada">
      <thead>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Nombre de Usuario</td>
        <td>Contraseña</td>
        <td>Detalle</td>
      </thead>
      <tbody id="myTable">
        <tr>
          <td>Raúl</td>
          <td>Estrada</td>
          <td>RaulEs</td>
          <td>re2021</td>
          <td><center><a href="nuevo_usuario.php"><button type="button" class="btn btn-info">Editar</button></a></center></td>
        </tr>
        <tr>
          <td>Marcela</td>
          <td>Soberanis</td>
          <td>MarceSo</td>
          <td>2458maso</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>Luis</td>
          <td>Perez</td>
          <td>LuiPe</td>
          <td>luipe0203</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4848-5486</td>
          <td>FerroMax</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>Mario</td>
          <td>Ruiz</td>
          <td>2415-8974</td>
          <td>Finca las palmas</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>

        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Mixto Listo</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Campero</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>NO Disponible</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>NO Disponible</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>NO Disponible</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>NO Disponible</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>José</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>NO Disponible</td>
          <td><center><button type="button" class="btn btn-info">Detalle</button></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_cliente.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Campo 1 - 20</td>
          <td>Campo 2 - 20</td>
          <td>Campo 3 - 20</td>

        </tr>
        <tr>
          <td>Campo 1 - 21</td>
          <td>Campo 2 - 21</td>
          <td>Campo 3 - 21</td>
 
        </tr>
        <tr>
          <td>Campo 1 - 22</td>
          <td>Campo 2 - 22</td>
          <td>Campo 3 - 22</td>

        </tr>
        <tr>
          <td>Campo 1 - 23</td>
          <td>Campo 2 - 23</td>
          <td>Campo 3 - 23</td>

        </tr>
        <tr>
          <td>Campo 1 - 24</td>
          <td>Campo 2 - 24</td>
          <td>Campo 3 - 24</td>

        </tr>
        <tr>
          <td>Campo 1 - 25</td>
          <td>Campo 2 - 25</td>
          <td>Campo 3 - 25</td>

        </tr>
        <tr>
          <td>Campo 1 - 26</td>
          <td>Campo 2 - 26</td>
          <td>Campo 3 - 26</td>

        </tr>
        <tr>
          <td>Campo 1 - 27</td>
          <td>Campo 2 - 27</td>
          <td>Campo 3 - 27</td>

        </tr>
        <tr>
          <td>Campo 1 - 28</td>
          <td>Campo 2 - 28</td>
          <td>Campo 3 - 28</td>

        </tr>
        <tr>
          <td>Campo 1 - 29</td>
          <td>Campo 2 - 29</td>
          <td>Campo 3 - 29</td>

          </tr>
        <tr>
          <td>Campo 1 - 30</td>
          <td>Campo 2 - 30</td>
          <td>Campo 3 - 30</td>

        </tr>
      </tbody>
      <tfoot>
        <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
        <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
        <td id="indicador_paginas"></td>
        <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
        <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
      </tfoot>
    </table>

</div>
  
  <div class="container-fluid">
                <br>
            <center>
                
                <a href="secritaria.php"><button type="button" class="btn btn-warning btn-lg" >Regresar</button></a>
                
            </center>
            </div>
</div>
</body>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>