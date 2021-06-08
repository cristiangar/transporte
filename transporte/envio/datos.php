
<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Paquete</title>
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
    <a href="../views/secritaria.php">
        <img src="../imagenes/logo.png" alt="HTML tutorial" style="width:52px;height:52px;">
    </a>
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Nuevo Paquete</a>
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

<?php
if(isset($_GET['id'])){
  include_once('../model/classdatos.php');
  $id=$_GET['id'];
  $envio=new envio();
  $dt=$envio->VerUno($id);
  while($row=mysqli_fetch_array($dt))
  {
      /**datos del envio */
      $id=$row['id_envio'];
      $codigo_envio=$row['codigo_envio'];
      $fenvio=$row['fecha_envio'];
      $fentrega=$row['fecha_entrega'];
      $autorizacion=$row['autorizacion'];
      /**datos del receptor y emisor */
      $id_cliente=$row['id_cliente'];//id
      $cliente=$row['cliente'];
      $tel_cliente=$row['tel_cliente'];
      $id_receptor=$row['id_receptor'];//id
      $receptor=$row['receptor'];
      $tel_receptor=$row['tel_receptor'];
      /**datos del paquete */
      $peso=$row['peso'];
      $direccion_entrega=$row['direccion_entrega'];
      $direccion_envio=$row['direccion_envio'];
      $id_ruta=$row['id_ruta'];
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
    }


  ?>
  <h1>Modificar envio</h1>
    <form method="POST" action="../controller/envio.php" >
      <h1>Datos del envio</h1>
      <br>
      <div class="form-row">
        <div class="col-sm-4">
          <label>Codigo envio</label>
          <input value='<?php echo $codigo_envio;?>' type="text" name="cod" class="form-control" placeholder="codigo envio"require>
        </div>
            <div class="col-sm-4">
            <label>Fecha de envio</label>
                <input value='<?php echo $fenvio;?>' type="date" name="fenvio" class="form-control"require>
            </div>
            <div class="col-sm-4">
            <label>Fecha de entrega</label>
                <input value='<?php echo $fentrega;?>' type="date" name="fentrega" class="form-control"require>
            </div>
      </div>
      <br>
      <h2>Datos del cliente y receptor</h2>
      <br>
      <div class="form-row">


                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input value='<?php echo $cliente;?>' type="text" class="form-control" placeholder="Cliente" id="pagina1" return false; name="Cliente">
                    <div class="input-group-append">
                      <button class="input-group-text btn-btn-primary" id="boton1">Cliente</button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input value='<?php echo $receptor;?>' type="text" class="form-control" placeholder="Receptor" id="pagina2" name="Receptor">
                    <div class="input-group-append">
                      <button  class="input-group-text btn-btn-primary" id="boton2" return false;>Receptor</button>
                    </div>
                  </div>
                </div>   
                
      </div>
      <br>
      <h2>Datos del paquete</h2>
      <br>

      <div class="form-row">
            <div class="col-sm-4">
                <label>Peso</label>
                <input value='<?php echo $peso;?>' type="text" name="peso" class="form-control" placeholder="Peso del paquete"require>
            </div>
            <div class="col-sm-4">
            <label>Dirección de Entrega</label>
                <input value='<?php echo $direccion_entrega;?>' type="text" name="direccion" class="form-control" placeholder="Lugar de destino" require>
            </div>
            <div class="col-sm-4">
            <label>Dirección de Envío</label>
                <input value='<?php echo $direccion_envio;?>' type="text" name="direccionenvio" class="form-control" placeholder="Lugar de envío">
            </div>
            <?php 
                $tipo=new envio();
                $dtruta=$tipo->Tipo_ruta();
            ?>
            <div class="col-sm-4">
                <label>Ruta</label>
                <select name="id_ruta" id="" class="form-control">
                <option  value='<?php echo $id_ruta;?>'><?php echo $origen.'-'.$destino?></option>
                <?php
                while($row=mysqli_fetch_array($dtruta)){
                    $valor=$row['id_ruta'];
                    $texto=$row['ruta'];
                    echo '<option  value="'.$valor.'">'.$texto.'</option>';
                }
                ?>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Descripción</label>
                <br>
                <textarea value='<?php echo $dpaquete;?>' calss='form-control' name="descripcion" id="" cols="110" rows="3"><?php echo $dpaquete;?></textarea>
            </div>
      </div>
      <br>
      <h1>Datos del vehiculo</h1>
      <br>
      <div class="form-row">
               <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input value='<?php echo $tipo_vehivulo;?>' type="text" class="form-control" placeholder="Vehiculo" id="pagina3" name="Vehiculo">
                    <div class="input-group-append">
                      <button class="input-group-text btn-btn-primary" id="boton3">Vehiculo</button>
                    </div>
                  </div>
                </div>

                <?php
                if($activador=='1')
                {
                  ?>
                  <div class="col-sm-4">
                    <div class="input-group mb-3">
                      <input value='<?php echo $tipo_plataforma?>' type="text" class="form-control" placeholder="Plataforma" id="pagina4" name="Plataforma">
                      <div class="input-group-append">
                        <button id="boton4" class="input-group-text btn-btn-primary">Plataforma</button>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>

                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input value='<?php echo $piloto;?>' type="text" class="form-control" placeholder="Piloto" id="pagina5" name="Piloto">
                    <div class="input-group-append">
                      <button id="boton5" class="input-group-text btn-btn-primary">Piloto</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label for="" class="text-danger">seleccione solo si un piloto cuenta con vehiculo propio</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pilotos Con vehiculos" id="pagina6" name="pilotoTercero">
                    <div class="input-group-append">
                      <button id="boton6" class="input-group-text btn-btn-primary">Piloto</button>
                    </div>
                  </div>
                </div>
      </div>
      <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>

<script src="../js/padre.js"></script> 
    </form>
  <?php


}
else
{
  ?>
    <form method="POST" action="../controller/envio.php" >
      <h1>Datos del envio</h1>
      <br>
      <div class="form-row">
        <div class="col-sm-4">
          <label>Codigo envio</label>
          <input type="text" name="cod" class="form-control" placeholder="codigo envio"require>
        </div>
            <div class="col-sm-4">
            <label>Fecha de envio</label>
                <input type="date" name="fenvio" class="form-control"require>
            </div>
            <div class="col-sm-4">
            <label>Fecha de entrega</label>
                <input type="date" name="fentrega" class="form-control"require>
            </div>
      </div>
      <br>
      <h2>Datos del cliente y receptor</h2>
      <br>
      <div class="form-row">


                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cliente" id="pagina1" return false; name="Cliente">
                    <div class="input-group-append">
                      <button class="input-group-text btn-btn-primary" id="boton1">Cliente</button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Receptor" id="pagina2" name="Receptor">
                    <div class="input-group-append">
                      <button  class="input-group-text btn-btn-primary" id="boton2" return false;>Receptor</button>
                    </div>
                  </div>
                </div>   
                
      </div>
      <br>
      <h2>Datos del paquete</h2>
      <br>

      <div class="form-row">
            <div class="col-sm-4">
                <label>Peso</label>
                <input type="text" name="peso" class="form-control" placeholder="Peso del paquete"require>
            </div>
            <div class="col-sm-4">
            <label>Dirección de Entrega</label>
                <input type="text" name="direccion" class="form-control" placeholder="Lugar de destino" require>
            </div>
            <div class="col-sm-4">
            <label>Dirección de Envío</label>
                <input type="text" name="direccionenvio" class="form-control" placeholder="Lugar de envío">
            </div>
            <?php 
            include_once('../model/classpaquete.php');
                $tipo=new paquete();
                $dt=$tipo->Tipo_ruta();
            ?>
            <div class="col-sm-4">
                <label>Ruta</label>
                <select name="id_ruta" id="" class="form-control">
                <?php
                while($row=mysqli_fetch_array($dt)){
                    $valor=$row['id_ruta'];
                    $texto=$row['ruta'];
                    echo '<option  value="'.$valor.'">'.$texto.'</option>';
                }
                ?>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Descripción</label>
                <br>
                <textarea value='N/A' calss='form-control' name="descripcion" id="" cols="110" rows="3"></textarea>
            </div>
      </div>
      <br>
      <h1>Datos del vehiculo</h1>
      <br>
      <div class="form-row">
               <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Vehiculo" id="pagina3" name="Vehiculo">
                    <div class="input-group-append">
                      <button class="input-group-text btn-btn-primary" id="boton3">Vehiculo1</button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Plataforma" id="pagina4" name="Plataforma">
                    <div class="input-group-append">
                      <button id="boton4" class="input-group-text btn-btn-primary">Plataforma</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Piloto" id="pagina5" name="Piloto">
                    <div class="input-group-append">
                      <button id="boton5" class="input-group-text btn-btn-primary">Piloto</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label for="" class="text-danger">seleccione solo si un piloto cuenta con vehiculo propio</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pilotos Con vehiculos" id="pagina6" name="pilotoTercero">
                    <div class="input-group-append">
                      <button id="boton6" class="input-group-text btn-btn-primary">Piloto</button>
                    </div>
                  </div>
                </div>
      </div>
      <div class="container-fluid col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="secritaria.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="reset" class="btn btn-danger" value="cancelar">
                
            </center>
        </div>

<script src="../js/padre.js"></script> 
    </form>
  <?php
}

?>

</div>
</body>
</html>