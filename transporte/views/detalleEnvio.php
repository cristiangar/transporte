<?php
session_start();
if(isset($_SESSION['usuario']))
{
    $rol=$_SESSION['rol'];
    $us=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Abonos</title>
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
<div class='container-fluid'>
<?php
include_once("../controller/envio.php");
while($row=mysqli_fetch_array($dt))
{
    /**datos del envio */
    $id=$row['id_envio'];
    $codigo_envio=$row['codigo_envio'];
    $fenvio=$row['fecha_envio'];
    $fentrega=$row['fecha_entrega'];
    $autorizacion=$row['autorizacion'];
    /**datos del receptor y emisor */
    $id_cliente=$row['id_cliente'];
    $cliente=$row['cliente'];
    $tel_cliente=$row['tel_cliente'];
    $id_receptor=$row['id_receptor'];
    $receptor=$row['receptor'];
    $tel_receptor=$row['tel_receptor'];
    /**datos del paquete */
    $peso=$row['peso'];
    $direccion_entrega=$row['direccion_entrega'];
    $direccion_envio=$row['direccion_envio'];
    $codigo_ruta=$row['codigo_ruta'];
    $origen=$row['pais_origen'];
    $destino=$row['pais_destino'];
    $dpaquete=$row['dpaquete'];
    /**datos del piloto */
    $id_piloto=$row['id_empleado'];
    $piloto=$row['piloto'];
    $tel_piloto=$row['telefono1'];
    $marca=$row['marca'];
    $placa=$row['no_placa'];
    $interno_externo=$row['tipo_interno_externo'];
    $descripcion=$row['descripcion'];
    $tipo_vehivulo=$row['tipo_vehiculo'];

    
    if(($tipo_vehivulo=="Cabezal") or ($tipo_vehivulo=="cabezal")){
      $placa_plataforma=$row['placa'];
      $tipo_plataforma=$row['tipo'];
      $color_plataforma=$row['color'];
      $tamanio_plataforma=$row['tamaño'];
      $descripcion_plataforma=$row['dplataforma'];
      $tplataforma=$row['tplataforma'];
      $activador=1;
    
    }
    else
    {
      //echo 'es camion';
      $activador=0;
    }

    
    if($autorizacion==0){
      $au="Sin Autorizar";
    }
    else{
      $au="Autorizado";
    }

}

?>
<h1>Datos del envio</h1>
<br>  
<h2>Estado del envio: <?php echo $au;?></h2>
      <br>
      <div class="form-row">
        <div class="col-sm-4">
          <label>Codigo envio</label>
          <input value='<?php echo $codigo_envio?>' type="text" name="cod" class="form-control" readonly>
        </div>
            <div class="col-sm-4">
            <label>Fecha de envio</label>
                <input value='<?php echo $fenvio?>' type="text" name="fenvio" class="form-control"readonly>
            </div>
            <div class="col-sm-4">
            <label>Fecha de entrega</label>
                <input value='<?php echo $fentrega?>' type="text" name="fentrega" class="form-control"readonly>
            </div>
      </div>
      <br>
      <h2>Datos del cliente y receptor</h2>
      <br>
      <div class="form-row">


                <div class="col-sm-4">
                <label for="">Cliente</label>
                  <div class="input-group mb-3">
                    <input value='<?php echo $cliente;?>' type="text" class="form-control"  name="Cliente" readonly>
                    <div class="input-group-append">
                      <a href="detalle_cliente.php?id=<?php echo $id_cliente;?>&envio=<?php echo $id;?>"><button class="input-group-text btn-btn-primary" id="boton1">Detalle cliente</button></a>
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-sm-4">
                    <label>Telefono del Cliente</label>
                    <input value='<?php echo $tel_cliente;?>' type="text" name="tcliente" class="form-control"readonly>
                </div>

                <div class="col-sm-4">
                <label for="">Receptor</label>
                  <div class="input-group mb-3">
                    <input value="<?php echo $receptor?>" type="text" class="form-control" placeholder="Receptor" id="pagina2" name="Receptor"readonly>
                    <div class="input-group-append">
                    <a href="detalle_receptor.php?id=<?php echo $id_receptor;?>&envio=<?php echo $id;?>"><button class="input-group-text btn-btn-primary" id="boton1">Detalle receptor</button></a>
                    </div>
                  </div>
                </div>   
                <div class="col-sm-4">
                <label>Telefono del Receptor</label>
                    <input value='<?php echo $tel_receptor;?>' type="text" name="treceptor" class="form-control"readonly>
                </div>
                
      </div>
      <br>
      <h2>Datos del paquete</h2>
      <br>
      <div class="form-row">
            <div class="col-sm-4">
            <label>Codigo de ruta</label>
                <input value="<?php echo $codigo_ruta;?>" type="text" name="direccion" class="form-control" placeholder="Lugar de destino" readonly>
            </div>
            <div class="col-sm-4">
            <label>Pais origen</label>
                <input value="<?php echo $origen;?>" type="text" name="direccion" class="form-control" placeholder="Lugar de destino" readonly>
            </div>
            <div class="col-sm-4">
            <label>Pais destino</label>
                <input value="<?php echo $destino;?>" type="text" name="direccion" class="form-control" placeholder="Lugar de destino" readonly>
            </div>

            <div class="col-sm-4">
            <label>Referencia 1</label>
                <input value="<?php echo $direccion_entrega;?>" type="text" name="direccion" class="form-control" placeholder="Lugar de destino" readonly>
            </div>
            
            <div class="col-sm-4">
            <label>Referencia 2</label>
                <input value="<?php echo $direccion_envio;?>" type="text" name="direccionenvio" class="form-control" placeholder="Lugar de envío" readonly>
            </div>
        
            <div class="col-sm-4">
                <label>Descripción</label>
                <br>
                <textarea value='N/A' calss='form-control' name="descripcion" id="" cols="65" rows="3" disabled><?php echo $dpaquete;?></textarea>
            </div>
      </div>
      <br>
      <h1>Datos del vehiculo y del piloto</h1>
      <br>
      <div class="form-row">
                <div class="col-sm-4">
                <label for="">Piloto</label>
                  <div class="input-group mb-3">
                    <input value='<?php echo $piloto?>' type="text" class="form-control" placeholder="Piloto" id="pagina5" name="Piloto">
                    <div class="input-group-append">
                    <a href="detalle_piloto.php?id=<?php echo $id_piloto;?>&envio=<?php echo $id;?>"><button class="input-group-text btn-btn-primary" id="boton1">Detalle Piloto</button></a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                <label>Telefono piloto</label>
                <input value='<?php echo $tel_piloto;?>' type="text" name="cod" class="form-control" readonly>
                </div>

                <div class="col-sm-4">
                <label>Marca del Vehiculo</label>
                <input value='<?php echo $marca;?>' type="text" name="cod" class="form-control" readonly>
                </div>
                 
                <div class="col-sm-4">
                <label>Tipo Vehiculo</label>
                <input value='<?php echo $tipo_vehivulo;?>' type="text" name="cod" class="form-control" readonly>
                </div>
                <div class="col-sm-4">
                <label>no_placa</label>
                <input value='<?php echo $placa;?>' type="text" name="cod" class="form-control" readonly>
                </div>
                <?php 
                    if($interno_externo=="1"){
                        ?>
                        <div class="col-sm-4">
                        <label>Propiedad el vehiculo</label>
                        <input value="Externo" type="text" name="cod" class="form-control" readonly>
                        </div>
                        <?php
                    }
                    else
                    {
                      ?>
                      <div class="col-sm-4">
                      <label>Propiedad el vehiculo</label>
                      <input value="Interno" type="text" name="cod" class="form-control" readonly>
                      </div>
                      <?php
                    }
                ?>
                <div class="col-sm-4">
                <label>Descripción</label>
                <br>
                <textarea value='N/A' calss='form-control' name="descripcion" id="" cols="135" rows="3" disabled><?php echo $descripcion;?></textarea>
                </div>
      </div>
      <br>
      <?php
                if($activador== "1"){
                  ?>
                  <br>
                  <h1>Datos del remolque</h1>
                  <div class="form-row">
                      <div class="col-sm-4">
                      <label>No. placa del remolque</label>
                      <input value='<?php echo $placa_plataforma;?>' type="text" name="cod" class="form-control" readonly>
                      </div>
                      <div class="col-sm-4">
                      <label>Tipo de remolque</label>
                      <input value='<?php echo $tipo_plataforma;?>' type="text" name="cod" class="form-control" readonly>
                      </div>
                      <div class="col-sm-4">
                      <label>Tamaño del remolque</label>
                      <input value='<?php echo $tamanio_plataforma;?>' type="text" name="cod" class="form-control" readonly>
                      </div>
                      <div class="col-sm-4">
                      <label>Color del remolque</label>
                      <input value='<?php echo $color_plataforma;?>' type="text" name="cod" class="form-control" readonly>
                      </div>
                      <?php
                        if($tplataforma=='1'){
                          ?>
                            <div class="col-sm-4">
                            <label>Propiedad del remolque</label>
                            <input value='Externo' type="text" name="cod" class="form-control" readonly>
                            </div>
                          <?php
                          
                        }
                        else{
                          ?>
                          <div class="col-sm-4">
                          <label>Propiedad del remolque</label>
                          <input value='Interno' type="text" name="cod" class="form-control" readonly>
                          </div>
                        <?php
                        }
                      ?>
                <div class="col-sm-6">
                <label>Descripción del remolque</label>
                <br>
                <textarea value='N/A' calss='form-control' name="descripcion" id="" cols="135" rows="3" disabled><?php echo $descripcion_plataforma;?></textarea>
                </div>
                  </div>
                  <?php
                  
                }
        ?>

      <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
               <!-- <a href="../controller/datos.php?id=<?php //echo $id?>&Autorizar"><button type="button" class="btn btn-success" >Autorizar</button></a> -->
                <a href="../Reportes/reporteEnvio.php?id=<?php echo $id;?>"target='_blank'><button type="button" class="btn btn-info" >Imprimir</button></a>
                <a href="../envio/datos.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-dark" >Modificar</button></a>
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>   
                <a href="../controller/envio.php?id=<?php echo $id?>&es=E"><button type="button" class="btn btn-danger" >Eliminar</button></a>      
            </center>
            <br>
        </div>

</div>
</body>
</html>
<?php
}

else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>