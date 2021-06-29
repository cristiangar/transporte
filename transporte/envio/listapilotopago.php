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
<?php
  include_once("../controller/datos.php");
   $resultado=$dt9->num_rows;
  if($resultado>0){

    ?>
      <h1>Viajes Autorizados</h1>
      <br>
      <div class="container mt-3">
      <input class="form-control" id="myInput" type="text" placeholder="buscar..">
      <br>
      <table class="table table-dark table-striped table-hover table-responsive-sm" border="1" id="tabla_paginada" >
            <thead>
              <td>Codigo de Viaje</td>
              <td>Nombre Piloto</td>
              <td>Adelanto</td>
              <td>Pendiente Complemento</td>
              <td>Estado</td>
              <td>Tipo Piloto</td>
              
            </thead>
      <?php
          while ($row=mysqli_fetch_array($dt9)) {
            $idenvio=$row['id_envio'];
            $id=$row['codigo_envio'];
            $idp=$row['id_empleado'];
            $nombre=$row['piloto'];
            $adelanto=$row['adelanto_piloto'];
            $pendiente=$row['pendiente_piloto'];
            $estado=$row['autorizacion'];
            $cargo=$row['cargo'];
         ?>
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $nombre?></td>
                    <td><?php echo $adelanto?></td>
                    <td><?php echo $pendiente?></td>
                    <?php
                      if($estado == 1){
                        ?>
                        <td><span class="badge badge-success">Autorizado</span></td>
                        <?php
                      }
                      else{
                        ?>
                        <td><span class="badge badge-danger">Sin Autorizar</span></td>
                        <?php
                      }
                    ?>
                    <td><?php echo $cargo?></td>
                    <td><center><a href="listapilotopago.php?id=<?php echo $id?>&no=<?php echo $nombre?>&idp=<?php echo $idp?>&ad=<?php echo $adelanto?>&pe=<?php echo $pendiente?>"><button type="button" class="btn btn-primary">Seleccionar</button></a></center></td>
                  </tr>
                 </tbody>
                 <?php
            }     
            
                ?>
                <tfoot>
                <td><input type="button" id="cargar_primera_pagina" value="<< Primero"/></td>
                <td><input type="button" id="cargar_anterior_pagina" value="< Anterior"/></td>
                <td id="indicador_paginas"></td>
                <td><input type="button" id="cargar_siguiente_pagina" value="Siguiente >"/></td>
                <td><input type="button" id="cargar_ultima_pagina" value="Ultimo >>"/></td>
                </tfoot>
      </table>            
            <center>
                 <a href="../views/menu_nuevo_piloto.php"><button type="button" class="btn btn-success" >Agregar Nuevo</button></a>
                    
            </center>

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
      <a href="../view/menu_nuevo_piloto.php"><button type="button" class="btn btn-success btn-lg" >Agregar Nuevo</button></a>
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


<br>
<?php
    
    if (isset($_GET['id'])){
      
      $valor=$_GET['id'];
      $nombre=$_GET['no'];
      $valor2=$_GET['idp'];
      $adelanto=$_GET['ad'];
      $pendiente=$_GET['pe'];
      $_SESSION['idenvio']=$valor;
      $_SESSION['idpiloto']=$valor2;
      $_SESSION['adelanto']=$adelanto;
      $_SESSION['pendiente']=$pendiente;
      ?>
          <h2>Cliente seleccionado: <?php echo $nombre ?></h2>
      		<input value='<?php echo $nombre;?>' type="text" id="P9" placeholder="Enviar al padre" hidden>&nbsp;
          <label for="">Precione el boton aceptar para continuar</label> <br>
		      <button class='btn btn-success btn-lg' id="btnp9" onclick="window.close();">Aceptar</button>
      <?php
    }
    ?>
		<br>
    <script src="../js/hija9.js"></script>

</html>