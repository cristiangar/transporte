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
            <a class="nav-link" >Nuevo Piloto</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" >Usuario: <?php echo $us;?></a>
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
        $id_empleado=$row['id_empleado'];
        $nombre=$row['nombre'];
        $apellido=$row['apellido'];
        $dpi=$row['dpi'];
        $telefono1=$row['telefono1'];
        $telefono2=$row['whatsApp'];
        $licencia=$row['licencia'];
        $tipo_licencia=$row['tipo_licencia'];
        $pasaporte=$row['pasaporte'];
        $ruta_imagen_licencia=$row['ruta_imagen_licencia'];
        $ruta_imagen_pasaporte=$row['ruta_imagen_pasaporte'];
        $ruta_imagen_dpi=$row['ruta_imagen_dpi'];
        $correo=$row['correo'];
        $banco=$row['banco'];
        $cuenta=$row['cuenta_bancaria'];
        $nombre_emergencia=$row['contacto_emergencia_nombre'];
        $numero_emergencia=$row['contacto_emergencia_numero'];
        $id_tipo_empleado=$row['id_tipo_empleado'];
        $cargo=$row['cargo'];
        $nombre_cuenta=$row['nombre_cuenta'];
        $tipo_cuenta=$row['tipocuenta'];
        $fecha_licencia=$row['fecha_licencia'];

    }
?>
 <form method="POST" action="../controller/pilotoInterno.php?id=<?php echo $id?>&mod" enctype="multipart/form-data">
    <h1>Datos del piloto a modificar</h1>
     <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>Nombre</label>
                <input value='<?php echo $nombre;?>' name="nombre" type="text" class="form-control" placeholder="Nombre" onkeypress="return (event.charCode==241 || event.charCode==32 || event.charCode >= 97 && event.charCode <= 122)" require>
            </div>
            <div class="col-sm-4">
                <label>Apellido</label>
                <input value='<?php echo $apellido;?>' name="apellido" type="text" class="form-control" placeholder="Apellido" onkeypress="return (event.charCode==241 || event.charCode==32 || event.charCode >= 97 && event.charCode <= 122)" require>
            </div>
            <div class="col-sm-4">
                <label>No.DPI</label>
                <input value='<?php echo $dpi;?>' name="dpi" type="text" class="form-control" placeholder="DPI" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono</label>
                <input type="text" name="telefono1" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13" value="<?php echo  $telefono1?>" require>
            </div>
            <div class="col-sm-4">
                <label>WhatsApp</label>
                <input value='<?php echo $telefono2;?>' type="text" value='N/A' name="telefono2" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13"  require>
            </div>
            <div class="col-sm-4">
                <label>contacto de emergencia</label>
                <input name="contacto_emergencia" value='<?php echo $nombre_emergencia;?>' type="text" class="form-control" onkeypress="return (event.charCode==241 || event.charCode >= 97 && event.charCode <= 122)" placeholder="Correo" require>
            </div>
            <div class="col-sm-4">
                <label>Numero de energencia</label>
                <input name="numero_emergencia" value='<?php echo $numero_emergencia;?>' type="text" class="form-control" placeholder="Correo" require>
            </div>
            <div class="col-sm-4">
                <label>Correo</label>
                <input value='<?php echo $correo;?>' name="correo" value='N/A' type="text" class="form-control" placeholder="Correo" require>
            </div>
            <?php 
                $tipo_empleado=new Piloto();
                $dt=$tipo_empleado->Tipo();
            ?>
            <div class="col-sm-4">
                <label>Tipo de Piloto</label>
                <select name="id_tipo_empleado" id="" class="form-control">
                <option value="<?php echo $id_tipo_empleado; ?>"><?php echo $cargo; ?></option>
                <?php
                while($row=mysqli_fetch_array($dt2)){
                    $valor=$row['id_tipo_empleado'];
                    $texto=$row['cargo'];
                    echo '<option  value="'.$valor.'">'.$texto.'</option>';
                }
                ?>
                </select>
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
                <input value='<?php echo $ruta_imagen_dpi;?>' name="ruta_dpi" type="hidden">
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
            <div class="col-sm-4">
                <label>Fecha de vencimiento</label>
                <input type="date" value='<?php echo date('Y-m-d',strtotime($fecha_licencia));?>' name="fecha" class="form-control" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
            </div>

            
<script>
    /**script de validacion de fecha */
    document.getElementById('#fecha').value = new Date().toDateInputValue();
</script>
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
            <input value='<?php echo $ruta_imagen_licencia;?>' name="ruta_licencia" type="hidden">            
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
                <input value='<?php echo $ruta_imagen_pasaporte;?>' name="ruta_pasaporte" type="hidden">
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
        <br>
        <h1>Datos bancarios</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>Banco</label>
                <input value="<?php echo $banco;?>" name="banco"  type="text" class="form-control" placeholder="Banco" require>
            </div>
            <div class="col-sm-4">
                <label>Nombre de la cuenta</label>
                <input value="<?php echo $nombre_cuenta;?>" name="Nbanco"  type="text" class="form-control" placeholder="Nombre de la cuenta" require>
            </div>
            <div class="col-sm-4">
                <label>No.cuenta de banco</label>
                <input value="<?php echo $cuenta;?>" name="cuenta_banco"  type="text" class="form-control" placeholder="No.cuenta" require>
            </div>
            <div class="col-sm-4">
                <label>Tipo de cuenta</label>
                <input value="<?php echo $tipo_cuenta;?>" name="tipo_cuenta"  type="text" class="form-control" placeholder="tipo cuenta" require>
            </div>
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
                <input name="nombre" type="text" class="form-control" placeholder="Nombre" onkeypress="return (event.charCode==241 || event.charCode==32 || event.charCode >= 97 && event.charCode <= 122)" require>
            </div>
            <div class="col-sm-4">
                <label>Apellido</label>
                <input name="apellido" type="text" class="form-control" placeholder="Apellido" onkeypress="return (event.charCode==241 || event.charCode==32 || event.charCode >= 97 && event.charCode <= 122)" require>
            </div>
            <div class="col-sm-4">
                <label>No.DPI</label>
                <input name="dpi" type="text" class="form-control" placeholder="DPI" require>
            </div>
            <div class="col-sm-4">
                <label>Telefono</label>
                <input type="text" name="telefono1" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13"  require>
            </div>
            <div class="col-sm-4">
                <label>WhatsApp</label>
                <input type="text" value='N/A' name="telefono2" class="form-control" placeholder="solo números"   onkeyup="Card(event, this)" maxlength="13"  require>
            </div>
            <div class="col-sm-4">
                <label>contacto de emergencia</label>
                <input name="contacto_emergencia" value='N/A' type="text" class="form-control" placeholder="Correo" onkeypress="return (event.charCode==241 || event.charCode >= 97 && event.charCode <= 122)" require>
            </div>
            <div class="col-sm-4">
                <label>Numero de energencia</label>
                <input name="numero_emergencia" value='N/A' type="text" class="form-control" placeholder="Correo" require>
            </div>
            <div class="col-sm-4">
                <label>Correo</label>
                <input name="correo" value='N/A' type="text" class="form-control" placeholder="Correo" require>
            </div> 
            <?php 
            include_once('../model/ClassPilotoInterno.php');
                $tipo_empleado=new Piloto();
                $dt=$tipo_empleado->Tipo();
            ?>
            <div class="col-sm-4">
                <label>Tipo de Piloto</label>
                <select name="id_tipo_empleado" id="" class="form-control">
                <?php
                while($row=mysqli_fetch_array($dt)){
                    $valor=$row['id_tipo_empleado'];
                    $texto=$row['cargo'];
                    echo '<option  value="'.$valor.'">'.$texto.'</option>';
                }
                ?>
                </select>
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
                <label>Fecha de vencimiento</label>
                <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
            </div>
            <div class="col-sm-4">
                <label>Imagen Licencia</label>
                <div class="container-fluid">
                    <input type="file" name="imglicencia">
                </div>
            </div>
        </div>
        <br>
<script>
    document.getElementById('#fecha').value = new Date().toDateInputValue();
</script>
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
        <h1>Datos bancarios</h1>
        <br>
        <div class="form-row">
            <div class="col-sm-4">
                <label>Banco</label>
                <input name="banco"  type="text" class="form-control" placeholder="Banco" require>
            </div>
            <div class="col-sm-4">
                <label>Nombre de la cuenta</label>
                <input name="Nbanco"  type="text" class="form-control" placeholder="Nombre de la cuenta" require>
            </div>
            <div class="col-sm-4">
                <label>No.cuenta de banco</label>
                <input name="cuenta_banco"  type="text" class="form-control" placeholder="No.cuenta" require>
            </div>
            <div class="col-sm-4">
                <label>Tipo de cuenta</label>
                <input name="tipo_cuenta"  type="text" class="form-control" placeholder="tipo cuenta" require>
            </div>
        </div>
        <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <center>
                    <input type="submit" class="btn btn-success" value="Aceptar">
                    <a href="choferes.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                    <input type="submit" class="btn btn-danger" value="cancelar">
                    <br>
                    
                </center>
                <br>
            </div>
            <br>
            <div></div>

    </form>
    <?php
}
?>
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