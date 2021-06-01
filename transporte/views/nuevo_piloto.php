<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Piloto</title>
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
            <a class="nav-link" >Nuevo Vehiculo</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
        
    </ul>

</nav>
<script>
                   function Card(event, el){//Validar nombre

                        //Obteniendo posicion del cursor 
                        var val = el.value;//Valor de la caja de texto
                        var pos = val.slice(0, el.selectionStart).length;
                        
                        var out = '';//Salida
                        var filtro = '1234567890';
                        var v = 0;//Contador de caracteres validos
                        
                        //Filtar solo los numeros
                        for (var i=0; i<val.length; i++){
                           if (filtro.indexOf(val.charAt(i)) != -1){
                               v++;
                               out += val.charAt(i);
                               
                               //Agregando un espacio cada 4 caracteres
                               if((v==3) || (v==7))
                                   out+='-';
                           }
                        }
                        
                        //Reemplazando el valor
                        el.value = out;
                        
                        //En caso de modificar un numero reposicionar el cursor
                        if(event.keyCode==8){//Tecla borrar precionada
                            el.selectionStart = pos;
                            el.selectionEnd = pos;
                        }
                    } 
            </script>
<div class="container-fluid">
<?php
if(isset($_GET['id']))
{
    include_once('../controller/pilotoInterno.php');
    $id= $_GET['id'];
    while($row=mysqli_fetch_array($dt)){
        $nombre=$row['nombre'];
        $apellido=$row['apellido'];
        $dpi=$row['dpi'];
        $telefono1=$row['telefono1'];
        $telefono2=$row['telefono2'];
        $licencia=$row['licencia'];
        $tipo_licencia=$row['tipo_licencia'];
        $pasaporte=$row['pasaporte'];
        $ruta_imagen_licencia=$row['ruta_imagen_licencia'];
        $ruta_imagen_pasaporte=$row['ruta_imagen_pasaporte'];
        $ruta_imagen_caat=$row['ruta_imagen_caat'];
        $ruta_imagen_dpi=$row['ruta_imagen_dpi'];
        $id_tipo_empleado=$row['id_tipo_empleado'];
        $codigo_caat=$row['codigo_caat'];
        $correo=$row['correo'];

    }
?>
 <form method="POST" action="../controller/pilotoInterno.php?id=<?php echo $id?>&mod" enctype="multipart/form-data">
    <h1>Datos del piloto a modificar</h1>
     <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>Nombre</label>
                <input value='<?php echo $nombre;?>' name="nombre" type="text" class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
                <label>Apellido</label>
                <input value='<?php echo $apellido;?>' name="apellido" type="text" class="form-control" placeholder="Apellido" require>
            </div>
            <div class="col-sm-4">
                <label>No.DPI</label>
                <input value='<?php echo $dpi;?>' name="dpi" type="text" class="form-control" placeholder="DPI" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono</label>
                <!--<input value='<?php echo $telefono1;?>' name="telefono1" type="text" class="form-control" placeholder="Telefono" require>-->
                <input type="text" name="telefono1" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13" value="<?php echo  $telefono1?>" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono 2</label>
                <input type="text" name="telefono2" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13" value="<?php echo  $telefono2?>" require>
            </div>
            <div class="col-sm-4">
                <label>Correo</label>
                <input value='<?php echo $correo;?>' name="correo" value='N/A' type="text" class="form-control" placeholder="Correo" require>
            </div>
            <?php
            if($ruta_imagen_dpi=="N/A")//verifico si hay imagen que mostrar S
            {
                ?>
                            
                <div class="col-sm-4">
                    <br>
                    <label>Imagen de DPI</label>
                    <div class="container-fluid">
                        <input type="file" name="imgDPI">
                    </div>
                </div> 
                <?php
            }
            else
            {
                 ?>
                <div class="col-sm-4">
                <label>Imagen actual</label><br>
                <img src="<?php echo $ruta_imagen_dpi;?>"width="400" height="200" alt="">
                </div>

                <div class="col-sm-4">
                <br>
                    <label>Seleccione una imagen si quiere cambiar la actual</label>
                    <div class="container-fluid">
                        <input type="file" name="imgDPI">
                    </div>
                </div>
                <input value='<?php echo $ruta_imagen_dpi;?>' name="ruta_dpi" type="hidden">
                 <?php   
            }
?>
             

        </div>
        <br>

        <h1>Datos de licencia</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No. licencia</label>
                <input value='<?php echo $licencia;?>' name="licencia" type="text" class="form-control" placeholder="No.licencia" require>
            </div>
            <div class="col-sm-4">
                <label>Tipo Licencia</label>
                <select name="tlicencia" id="" class="form-control">
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                </select>
            </div>
<?php
            if($ruta_imagen_licencia=="N/A")
            {
                ?>
            <div class="col-sm-4">
                <label>Imagen Licencia</label>
                <div class="container-fluid">
                    <input type="file" name="imglicencia">
                </div>
            </div>                
                <?php
            }
            else{
                ?>
                <div class="col-sm-4">
                <label>Imagen actual</label><br>
                    <div class="container-fluid">
                    <img src="<?php echo $ruta_imagen_licencia;?>" width="400" height="200" alt="">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label>Seleccione una imagen si quiere cambiar la actual</label>
                    <div class="container-fluid">
                        <input type="file" name="imglicencia">
                    </div>
                </div>
                <input value='<?php echo $ruta_imagen_licencia;?>' name="ruta_licencia" type="hidden">
                <?php
            }
?>   



        </div>
        <br>

        <h1>Datos del Pasaporte</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No.Pasaporte</label>
                <input value='<?php echo $pasaporte;?>' name="pasaporte" type="text" class="form-control" value="N/A">
            </div>
<?php
            if($ruta_imagen_pasaporte=='N/A'){
                ?>
                <div class="col-sm-4">
                    <label>Imagen Pasaporte</label>
                    <div class="container-fluid">
                        <input type="file" name="imgPasaporte">
                    </div>
                </div>
                <?php
            }
            else{
                ?>
            <div class="col-sm-4">
            <label>Imagen actual</label><br>
            <img src="<?php echo $ruta_imagen_pasaporte;?>"width="400" height="200" alt="">
            </div>

            <div class="col-sm-4">
                <label>Seleccione una imagen si quiere cambiar la actual</label>
                <div class="container-fluid">
                    <input type="file" name="imgPasaporte">
                </div>
            </div>
            <input value='<?php echo $ruta_imagen_pasaporte;?>' name="ruta_pasaporte" type="hidden">
                <?php

            }
?>      

        </div>
        <br>

        <h1>Datos del Caat</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No.Caat</label>
                <input value='<?php echo $codigo_caat;?>' name="caat" type="text" class="form-control"  value="N/A">
            </div>
<?php
            if($ruta_imagen_caat=='N/A')
            {
              ?>
            <div class="col-sm-4">
            <label>Imagen actual</label><br>
            <img src="<?php echo $ruta_imagen_caat;?>"width="400" height="200" alt="">
            </div>
              <?php
            }
            else{
?>
            <div class="col-sm-4">
            <label>Imagen actual</label><br>
            <img src="<?php echo $ruta_imagen_caat;?>"width="400" height="200" alt="">
            </div>

            <div class="col-sm-4">
                <label>Seleccione una imagen si quiere cambiar la actual</label>
                <div class="container-fluid">
                    <input type="file" name="imgCaat">
                </div>
            </div> 
            <input value='<?php echo $ruta_imagen_caat;?>' name="ruta_caat" type="hidden">
<?php
            }
?>
           
        </div>

        
        <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <center>
                    <input type="submit" class="btn btn-success" value="Aceptar">
                    <a href="choferes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                    <input type="submit" class="btn btn-danger" value="cancelar">
                    <br>
                    
                </center>
            </div>

    </form>
<?php
    

}
else
{
    ?>
    <form method="POST" action="../controller/pilotoInterno.php" enctype="multipart/form-data">
    <h1>Datos del piloto</h1>
     <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
                <label>Apellido</label>
                <input name="apellido" type="text" class="form-control" placeholder="Apellido" require>
            </div>
            <div class="col-sm-4">
                <label>No.DPI</label>
                <input name="dpi" type="text" class="form-control" placeholder="DPI" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono</label>
                <!--<input name="telefono1" type="text" class="form-control" placeholder="Telefono"require>-->
                <input type="text" name="telefono1" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13"  require>
            </div>
            <div class="col-sm-4">
                <label>Telefono 2</label>
                <input type="text" name="telefono2" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13"  value="N/A" require>
            </div>
            <div class="col-sm-4">
                <label>Correo</label>
                <input name="correo" value='N/A' type="text" class="form-control" placeholder="Correo" require>
            </div>
            
            <div class="col-sm-4">
                <br>
                <label>Imagen de DPI</label>
                <div class="container-fluid">
                    <input type="file" name="imgDPI">
                </div>
            </div>  
        </div>
        <br>

        <h1>Datos de licencia</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No. licencia</label>
                <input name="licencia" type="text" class="form-control" placeholder="No.licencia" require>
            </div>
            <div class="col-sm-4">
                <label>Tipo Licencia</label>
                <select name="tlicencia" id="" class="form-control">
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Imagen Licencia</label>
                <div class="container-fluid">
                    <input type="file" name="imglicencia">
                </div>
            </div>
        </div>
        <br>

        <h1>Datos del Pasaporte</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No.Pasaporte</label>
                <input name="pasaporte" type="text" class="form-control" value="N/A">
            </div>
            <div class="col-sm-4">
                <label>Imagen Pasaporte</label>
                <div class="container-fluid">
                    <input type="file" name="imgPasaporte">
                </div>
            </div>
        </div>
        <br>

        <h1>Datos del Caat</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>No.Caat</label>
                <input name="caat" type="text" class="form-control"  value="N/A">
            </div>
            <div class="col-sm-4">
                <label>Imagen Caat</label>
                <div class="container-fluid">
                    <input type="file" name="imgCaat">
                </div>
            </div>            
        </div>

        
        <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <center>
                    <input type="submit" class="btn btn-success" value="Aceptar">
                    <a href="menu_nuevo_piloto.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                    <input type="submit" class="btn btn-danger" value="cancelar">
                    <br>
                    
                </center>
            </div>

    </form>
    <?php
}
?>
</div>
</div>
</body>
</html>