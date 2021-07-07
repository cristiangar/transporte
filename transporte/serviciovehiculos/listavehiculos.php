<!DOCTYPE html>
<html>
<head>
    <title>Pilotos</title>
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
<h1>Lista de Pilotos</h1>
<br>
<div class="container mt-3">
<input class="form-control" id="myInput" type="text" placeholder="buscar..">
<br>
<table class="table table-bordered" border="1" id="tabla_paginada">
      <thead>
        <td>Placa</td>
        <td>Tipo</td>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Detalle</td>
        <td>Agregar Servicio</td>
      </thead>
      <tbody id="myTable">
        <tr>
          <td>P-012JKL</td>
          <td>Camion</td>
          <td>Keywork</td>
          <td>2005</td>
          <td><center>
            <a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a>
          </center></td>
          <td><center><a href="nuevoservicio.php"><button type="button" class="btn btn-info">Nuevo Servicio</button></a></center></td>
        </tr>
        <tr>
          <td>P-456GHW</td>
          <td>Camion</td>
          <td>Hyudai</td>
          <td>2008</td>
           <td><center>
            <a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a>
          </center></td>
          <td><center><a href="nuevoservicio.php"><button type="button" class="btn btn-info">Nuevo Servicio</button></a></center></td>
        </tr>
        <tr>
          <td>C-054MLW</td>
          <td>Cabezal</td>
          <td>Hyno</td>
          <td>2002</td>
           <td><center>
            <a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a>
          </center></td>
          <td><center><a href="nuevoservicio.php"><button type="button" class="btn btn-info">Nuevo Servicio</button></a></center></td>
        </tr>
        <tr>
          <td>C-065BCS</td>
          <td>Plataforma</td>
          <td>Toyota</td>
          <td>N/A</td>
           <td><center>
            <a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a>
          </center></td>
          <td><center><a href="nuevoservicio.php"><button type="button" class="btn btn-info">Nuevo Servicio</button></a></center></td>
        </tr>
        <tr>
          <td>Mario</td>
          <td>Ruiz</td>
          <td>2415-8974</td>
          <td>Disponible</td>
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
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
        </tr>
        <tr>
          <td>Jorge</td>
          <td>Campos</td>
          <td>4088-1056</td>
          <td>Disponible</td>
          <td><center><a href="detalle_piloto.php"><button type="button" class="btn btn-info">Detalle</button></a></center></td>
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

<!--<table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>telefono</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>1234-45678</td>
        <td>Disponible</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>1234-45678</td>
        <td>Disponible</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>1234-45678</td>
        <td>No disponible</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>1234-45678</td>
        <td>No disponible</td>
      </tr>
    </tbody>
  </table>-->
</div>
  
  <div class="container-fluid">
                <br>
            <center>
                <a href="generarchofer.php"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                
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