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
    <title>Nuevo Vehiculo</title>
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
                        var filtro = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890';
                        var v = 0;//Contador de caracteres validos
                        
                        //Filtar solo los numeros
                        for (var i=0; i<val.length; i++){
                           if (filtro.indexOf(val.charAt(i)) != -1){
                               v++;
                               out += val.charAt(i);
                               
                               //Agregando un espacio cada 4 caracteres
                               if((v==2) || (v==9))
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
        if(isset($_GET['P']))/**plataforma */
        {
            if(isset($_GET['P']) and isset($_GET['id']))/** formulario de  a modificar */
            {
                $id_plataforma=$_GET['id'];
                include_once('../controller/plataforma.php');
                $plataforma=new Plataforma();
                $detalle=$plataforma->VerUno($id);
                while($row=mysqli_fetch_array($detalle)){
                    $id_plataforma=$row['id_plataforma'];
                    $tamaño=$row['tamaño'];
                    $color=$row['color'];
                    $ejes=$row['ejes'];
                    $peso=$row['peso'];
                    $tipo=$row['tipo'];
                    $estado_uso=$row['estado_uso'];
                    $placa=$row['placa'];
                    $ruta_imagen_targeta=$row['ruta_imagen_targeta'];
                    $descripcion=$row['descripcion'];
                    $tipo_interno=$row['tipo_interno_externo'];
                    $modelo=$row['modelo'];
                    $marca=$row['marca'];
                    $numeco=$row['numeco'];
                    $ruta_imagen_caat=$row['ruta_imagen_caat'];
                    $caat=$row['caat'];
                    }   
                ?>
                    <form method="POST" action="../controller/plataforma.php?id=<?php echo $id_plataforma;?>&mod" enctype="multipart/form-data">
                        <h1>Datos de la Plataforma a modificar</h1>
                        <br>
                            <div class="form-row">

                                <div class="col-sm-4">
                                <label>Placa</label>
                                        <input value="<?php echo $placa?>"  name='pplaca' type="text" class="form-control" placeholder="Número de placa" onkeyup="Card(event, this)" maxlength="9" require>
                                </div>

                                <div class="col-sm-4">
                                    <label>Marca</label>
                                        <input value="<?php echo $marca?>"  name='pmarca' type="text" class="form-control" placeholder="marca del equipo" require>
                                </div>

                               
                                <div class="col-sm-4">
                                    <label>Modelo</label>
                                        <input value="<?php echo $modelo?>"  name='pmodelo' type="text" class="form-control" placeholder="Modelo del equipo" require>
                                </div>

                                <div class="col-sm-4">
                                    <label>Ejes</label>
                                    <input value="<?php echo $ejes?>" name='pejes' type="text" class="form-control" placeholder="Tamaño"require>
                                </div>

                                <div class="col-sm-4">
                                    <label>Tamaño</label>
                                    <input value="<?php echo $tamaño?>" name='ptamaño' type="text" class="form-control" placeholder="Tamaño"require>
                                </div>
                                <div class="col-sm-4">
                                    <label>Color</label>
                                        <input value="<?php echo $color?>"  name='pcolor' type="text" class="form-control" placeholder="Color" require>
                                </div>

                                <div class="col-sm-4">
                                    <label>Número Economico</label>
                                        <input value="<?php echo $numeco?>" name='pnumeco' type="text" class="form-control" placeholder="Peso en Kilogramos" require>
                                </div>

                                <br><br>
                                <div class="col-sm-4">
                                <label>Número CAAT</label>
                                <input value="<?php echo $caat?>" name='pcaat' type="text" class="form-control" placeholder="Numero CAAT" require>
                                </div>
                            <?php
                            if($ruta_imagen_caat=="N/A"){/**valida si hay imagen o no */
                                ?>
                                <div class="col-sm-4">
                                <br>
                                <label>Documento CAAT</label>
                                <input type="file" name="imagencaat">
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                            <div class="col-sm-4">
                            <label>Documento actual</label><br>
                                <div class="container-fluid">
                                <a href="<?php echo  $ruta_imagen_caat;?>" download="Codigo CAAT">Descargar CAAT</a>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <br>
                                <label>Documento CAAT</label>
                                <br>
                                <input type="file" name="imagencaat">
                            </div>
                            <input value='<?php echo $ruta_imagen_caat;?>' name="ruta_caat" type="hidden">

                                <?php
                            }
                            ?>
                                <br>
                                
                                <div class="col-sm-4">
                                    <label>Tipo de Remolque</label>
                                        <select name="ptipo" id=""class="form-control">
                                            <option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
                                            <option value="portaautomoviles">portaautomoviles</option>
                                            <option value="plataforma abierta">plataforma abierta</option>
                                            <option value="plataforma cerrada">plataforma cerrada</option>
                                            <option value="cisterna">cisterna</option>
                                            <option value="plataforma refrigerada">plataforma refigerada</option>
                                        </select>
                                </div>
                            <div class="col-sm-4">
                            <label>Flotilla</label>
                            <select name='propiedad' class="form-control">
                                <option value='0'>Interna</option>
                                <option value='1'>Agregado</option>
                            </select>
                            </div>
                            <br><br>
                            <?php
                            if($ruta_imagen_targeta=="N/A"){/**valida si hay imagen o no */
                                ?>
                                <div class="col-sm-4">
                                <br>
                                <label>Imagen de Tarjeta de Cirtuclación</label>
                                <input type="file" name="imagen">
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                            <div class="col-sm-4">
                            <label>Imagen actual</label><br>
                                <div class="container-fluid">
                                <img src="<?php echo $ruta_imagen_targeta;?>" width="400" height="200" alt="">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <br>
                                <label>Imagen de Tarjeta de Cirtuclación</label>
                                <input type="file" name="imagen">
                            </div>
                            <input value='<?php echo $ruta_imagen_targeta;?>' name="ruta_targeta" type="hidden">

                                <?php
                            }
                            ?>
                    
                            <div class="col-sm-4">
                            <label>Otros</label>
                            <br>
                            <textarea value="<?php echo $descripcion;?>" name='otros' cols="65" rows="2"><?php echo $descripcion;?></textarea> 
                            </div>

                        </div>

                            <div class="container-fluid wrapper fadeInDown col-sm-5">
                                <br>
                                <br>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Aceptar">
                                    <a href="vehiculos.php?P"><button type="button" class="btn btn-warning" >Regresar</button></a>
                                    <input type="reset" class="btn btn-danger" value="cancelar">
                                    
                                </center>
                            </div>
                    </form>
                <?php

            }
            else{/* formulario de nuevo  */
                ?>
            <form method="POST" action="../controller/plataforma.php" enctype="multipart/form-data">
            <h1>Datos de la Plataforma</h1>
            <br>
                <div class="form-row">

                        <div class="col-sm-4">
                            <label>Placa</label>
                                <input  name='pplaca' type="text" class="form-control" placeholder="Número de placa" onkeyup="Card(event, this)" maxlength="9" require>
                        </div>

                        <div class="col-sm-4">
                            <label>Marca</label>
                            <input value="N/A" name='pmarca' type="text" class="form-control" placeholder="Marca" require>
                        </div>

                        <div class="col-sm-4">
                            <label>Modelo</label>
                                <input value="N/A" name='pmodelo' type="text" class="form-control" placeholder="Modelo" require>
                        </div>

                        <div class="col-sm-4">
                            <label>Ejes</label>
                            <input value="N/A" name='pejes' type="text" class="form-control" placeholder="Ejes"require>
                        </div>

                        <div class="col-sm-4">
                            <label>Tamaño</label>
                            <input value="N/A" name='ptamaño' type="text" class="form-control" placeholder="Tamaño"require>
                        </div>
                        <div class="col-sm-4">
                            <label>Color</label>
                                <input  name='pcolor' type="text" class="form-control" placeholder="Color" require>
                        </div>
                        
                        <div class="col-sm-4">
                            <label>Número Economico</label>
                                <input value="S/N" name='pnumeco' type="text" class="form-control" placeholder="Numero economico" require>
                        </div>

                        <div class="col-sm-4">
                            <label>Número CAAT</label>
                                <input value="N/A" name='pcaat' type="text" class="form-control" placeholder="Numero CAAT" require>
                        </div>
                        <div class="col-sm-4">
                    <br>
                    <label>Documento CAAT</label>
                    <input type="file" name="imagencaat">
                    </div>

                        

                        <div class="col-sm-4">
                            <label>Tipo de Remolque</label>
                                <select name="ptipo" id=""class="form-control">
                                    <option value="Plataforma">Plataforma</option>
                                    <option value="Cisterna">Cisterna</option>
                                    <option value="Caja refrigerada">Caja refrigerada</option>
                                    <option value="Caja seca">Caja seca</option>
                                    <option value="Low Body">Low Body</option>
                                    <option value="Cama baja">Cama baja</option>
                                </select>
                        </div>
                    <div class="col-sm-4">
                    <label>Flotilla</label>
                    <select name='propiedad' class="form-control">
                        <option value='0'>Interna</option>
                        <option value='1'>Agregado</option>
                    </select>
                    </div>
                    <br><br>

                    <div class="col-sm-4">
                    <br>
                    <label>Imagen de Tarjeta de Cirtuclación</label>
                    <input type="file" name="imagen">
                    </div>
            
                    <div class="col-sm-4">
                    <label>Otros</label>
                    <br>
                    <textarea name='otros' value='N/A' cols="200" rows="2"></textarea> 
                    </div>

                </div>

                    <div class="container-fluid wrapper fadeInDown col-sm-5">
                        <br>
                        <br>
                        <center>
                            <input type="submit" class="btn btn-success" value="Aceptar">
                            <a href="vehiculos.php?P"><button type="button" class="btn btn-warning" >Regresar</button></a>
                            <input type="submit" class="btn btn-danger" value="cancelar">
                            
                        </center>
                    </div>
            </form>
                <?php
            }
        }
        else{
            if(isset($_GET['C']))/** para cabezal */
            {
                if(isset($_GET['C']) and isset($_GET['id']))
                {
                    $id_cabezal=$_GET['id'];
                    include_once('../controller/cabezales.php');
                    $cabezal=new Cabezal();
                    $detalle=$cabezal->VerUno($id);
                    while($row=mysqli_fetch_array($detalle)){
                        $id_cabezal=$row['id_vehiculo'];
                        $marca=$row['marca'];
                        $modelo=$row['modelo'];
                        $tonelaje=$row['tonelaje'];
                        $ruta_imagen_targeta=$row['ruta_imagen_tarjeta'];
                        $placa=$row['no_placa'];
                        $descripcion=$row['descripcion'];
                        $tipo=$row['tipo_interno_externo'];
                        $tamaño=$row['tamaño'];
                        $ejes=$row['ejes'];
                        $color=$row['color'];
                        }   
                    /**formulario para modificar */
                    ?>
                    <form method="POST" action="../controller/cabezales.php?id=<?php echo $id_cabezal;?>&mod" enctype="multipart/form-data">
                    <h1>Datos del Vehiculo a modificar</h1>
                    <br>
                    <div class='form-row'>
                            <div class="col-sm-4">
                                <label>No.Placa</label>
                                <input value='<?php echo $placa; ?>' name='placa' type="text" class="form-control" placeholder="Número de placa" onkeyup="Card(event, this)" maxlength="9" require>
                            </div>
                            <div class="col-sm-4">
                                <label>Marca</label>
                                <input value='<?php echo $marca; ?>' name='marca' type="text" class="form-control" placeholder="Marca" require>
                            </div>
                            
                            <div class="col-sm-4">
                                <label>Modelo</label>
                                <input value='<?php echo $modelo; ?>' name='modelo' type="text" class="form-control" placeholder="Modelo"require>
                            </div>
                            <div class="col-sm-4">
                                <label>Tonelaje</label>
                                <input value='<?php echo $tonelaje; ?>' name='tonelaje' type="text" class="form-control" placeholder="Tonelaje" require>
                            </div>
                            <div class="col-sm-4">
                                <label>ejes</label>
                                <input value='<?php echo $ejes; ?>' name='ejes' type="text" class="form-control" placeholder="ejes" value='N/A' require>
                            </div>
                            <div class="col-sm-4">
                                    <label>color</label>
                                        <input value='<?php echo $color; ?>' name='color' type="text" class="form-control" placeholder="color" require>
                            </div>
                            <div class="col-sm-4">
                            <label>Tipo Vehiculo</label>
                            <select name='tipo_vehiculo' class="form-control">
                                <option value='Cabezal'>Cabezal</option>
                                <option value='Camion'>Camion</option>
                            </select>
                            </div>
                            <div class="col-sm-4">
                            <label>Flotilla</label>
                            <select name='propiedad' class="form-control">
                                <option value='0'>Flotilla Interna</option>
                                <option value='1'>Flotilla Externa</option>
                            </select>
                            </div>
                            <br><br>
                            <?php
                            if($ruta_imagen_targeta=="N/A"){/**valida si hay imagen o no */
                                ?>

                                <div class="col-sm-4">
                                    <br>
                                    <label>Imagen Targeta Circulacion</label>
                                    <div class="container-fluid">
                                    <input type="file" name="imgTargetaVeiculo">
                                    </div>
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                            <div class="col-sm-4">
                            <label>Imagen actual</label><br>
                                <div class="container-fluid">
                                <img src="<?php echo $ruta_imagen_targeta;?>" width="400" height="200" alt="">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <br>
                                <label>Imagen Targeta Circulacion</label>
                                <div class="container-fluid">
                                <input type="file" name="imgTargetaVeiculo">
                                </div>
                            </div>
                                <?php
                            }
                            
                            ?>
                            <input value='<?php echo $ruta_imagen_targeta;?>' name="ruta" type="hidden">
                            <br>
                            <br>
                            <div class="col-sm-4">
                                <label>descripcion</label>
                                <br>
                                <textarea value='<?php echo $descripcion; ?>' calss='form-control' name="descripcion" id="" cols="200" rows="3"><?php echo $descripcion; ?></textarea>
                            </div>
                    </div>
                        <br>
                        <div class="container-fluid wrapper fadeInDown col-sm-5">
                                <br>
                                <br>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Aceptar">
                                    <a href="vehiculos.php?C"><button type="button" class="btn btn-warning" >Regresar</button></a>
                                    <input type="reset" class="btn btn-danger" value="cancelar">
                                    
                                </center>
                            </div>
                    </form>
                    <?php
                }
                else{
                    /**ingresar nuevo Vehiculo */
                    ?>
                    <form method="POST" action="../controller/cabezales.php" enctype="multipart/form-data">
                    <h1>Datos del Vehiculo</h1>
                    <br>
                    <div class='form-row'>
                            <div class="col-sm-4">
                                <label>No.Placa</label>
                                <input name='placa' type="text" class="form-control" placeholder="Número de placa" onkeyup="Card(event, this)" maxlength="9" require>
                            </div>
                            <div class="col-sm-4">
                                <label>Marca</label>
                                <input name='marca' type="text" class="form-control" placeholder="Marca" require>
                            </div>
                            
                            <div class="col-sm-4">
                                <label>Modelo</label>
                                <input name='modelo' type="text" class="form-control" placeholder="Modelo"require>
                            </div>
                            <div class="col-sm-4">
                                <label>Tonelaje</label>
                                <input name='tonelaje' type="text" class="form-control" placeholder="Tonelaje" require>
                            </div>
                            <div class="col-sm-4">
                                <label>ejes</label>
                                <input name='ejes' type="text" class="form-control" placeholder="ejes" value='N/A' require>
                            </div>
                            <div class="col-sm-4">
                                    <label>color</label>
                                        <input name='color' type="text" class="form-control" placeholder="color" require>
                                </div>
                            <div class="col-sm-4">
                            <label>Tipo Vehiculo</label>
                            <select name='tipo_vehiculo' class="form-control">
                                <option value='Cabezal'>Cabezal</option>
                                <option value='Camion'>Camion</option>
                            </select>
                            </div>
                            <div class="col-sm-4">
                            <label>Flotilla</label>
                            <select name='propiedad' class="form-control">
                                <option value='0'>Flotilla Interna</option>
                                <option value='1'>Flotilla Externa</option>
                            </select>
                            </div>
                            <br><br>

                            <div class="col-sm-4">
                                <br>
                                <label>Imagen Targeta Circulacion</label>
                                <div class="container-fluid">
                                <input type="file" name="imgTargetaVeiculo">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-sm-4">
                                <label>descripcion</label>
                                <br>
                                <textarea value='N/A' calss='form-control' name="descripcion" id="" cols="135" rows="3"></textarea>
                            </div>
                    </div>
                        <br>
                        <div class="container-fluid wrapper fadeInDown col-sm-5">
                                <br>
                                <br>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Aceptar">
                                    <a href="vehiculos.php?C"><button type="button" class="btn btn-warning" >Regresar</button></a>
                                    <input type="reset" class="btn btn-danger" value="cancelar">
                                    
                                </center>
                            </div>
                    </form>
                    <?php
                }
            }
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