<?php
 include_once("../controller/datos.php");
if(isset($_SESSION['usuario']))
{
    $rol=$_SESSION['rol'];
    $us=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Plataforma</title>
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
            <a class="nav-link" >Usuario: <?php echo $us;?></a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<?php
  $resultado=$dt6->num_rows;
      if($resultado>0){
        ?>
          <h1>Listas de Plataformas</h1>
          <input class="form-control" id="myInput" type="text" placeholder="buscar..">
          <br>

          <table class="table table-dark table-striped table-hover table-responsive-sm" border="1" id="tabla_paginada">
                <thead>
                  <td>tipo remolque</td>
                  <td>Estado</td>
                  <td>No.placa</td>
                  <td>Propiedad</td>
                  
                </thead>
                <tbody id="myTable">
                  <?php
                  while($row=mysqli_fetch_array($dt6) )
                  {
                    $id=$row['id_plataforma'];
                    $tipo=$row['tipo'];
                    $estado=$row['estado_uso'];
                    $placa=$row['placa'];
                    $propiedad=$row['tipo_interno_externo'];
                    ?>
                    <tr>
                    <td><?php echo $tipo;?></td>
                    <?php
                      if($estado == 'Disponible' or $estado =='disponible'){
                        ?>
                        <td><span class="badge badge-success"><?php echo $estado?></span></td>
                        <?php
                      }
                      else{
                        ?>
                        <td><span class="badge badge-danger"><?php echo $estado?></span></td>
                        <?php
                      }
                    ?>
                    <td><?php echo $placa;?></td>
                    <?php
                    if($propiedad=='1'){/** valida si viene un 1 0 sera para ver la propiedad de la plataforma */
                      ?>
                      <td>Externo</td>
                      <?php
                    }
                    else{
                      ?>
                      <td>Interno</td>
                      <?php
                    }
                    ?>
                    <td><center><a href="listaplataforma.php?id=<?php echo $id?>&no=<?php echo $tipo?>"><button type="button" class="btn btn-primary">Seleccionar</button></a></center></td>
                    </tr>
                    <?php
                  }       
                  ?> 
                </tbody>
                <tfoot>
                  <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
                  <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
                  <td id="indicador_paginas"></td>
                  <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
                  <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
                </tfoot>
              </table>
              <div class="container-fluid">
                    <br>
                <center>
                    
                    
                    
                </center>
                </div>

            <?php
  }
  else{
    ?> 
    <center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><br><br><br>
      <h1>No hay datos ingresados</h1>
      <br>
      
    </center>
    <?php
  }
?>

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



<?php
    if (isset($_GET['id'])){
      
      $valor=$_GET['id'];
      $nombre=$_GET['no'];
      $_SESSION['idplataforma']=$valor;
      ?>
          <h2>Cliente seleccionado: <?php echo $nombre ?></h2>
          <input value='Plataforma tipo <?php echo $nombre;?>' type="text" id="P4" placeholder="Enviar al padre"hidden >&nbsp;
          <label for="">Precione el boton aceptar para continuar</label> <br>
		      <button class='btn btn-success btn-lg' id="btnp4" onclick="window.close();">Aceptar</button>
      <?php
    }
    ?>
		<br>
    <script src="../js/hija4.js"></script>

</html>
<?php
}

else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>