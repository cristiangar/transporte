<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Piloto tercero</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <a class="nav-link" >Nuevo Piloto Tercero</a>
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
    <form action="">
        <h1>Datos del Piloto</h1>
        <br>
            <div  class="form-row">
                <div class="col-sm-4">
                <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" require>
                </div>
                <div class="col-sm-4">
                <label>Apellido</label>
                    <input type="text" class="form-control" placeholder="Apellido"require>
                </div>
                <div class="col-sm-4">
                <label>Teléfono 1</label>
                    <input type="text" class="form-control" placeholder="Telefono 1" require>
                </div>
                <div class="col-sm-4">
                <label>Teléfono 2</label>
                    <input type="text" class="form-control" placeholder="Teléfono 2" require>
                </div>
                <div class="col-sm-4">
                <label>No.DPI</label>
                    <input type="text" class="form-control" placeholder="Número de DPI" require>
                </div>
                <div class="col-sm-4">
                <label>Dirección</label>
                    <input type="text" class="form-control" placeholder="Dirección" require>
                </div>

                <div class="col-sm-4">
                <br>
                <label>Imagen de DPI</label>
                <div class="container-fluid">
                    <input type="file" name="imagen">
                </div>
                </div>
                    
            </div>

            <br>
            <h1>Datos de licencia </h1>
            <br>
            <div class="form-row">
                <div class="col-sm-4">
                    <label>No. Licencia</label>
                    <input type="text" class="form-control" placeholder="Número Licencia" require>
                </div>

                <div class="col-sm-4">
                    <label>Tipo Licencia</label>
                    <select name="departamento" id="" class="form-control">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <label>Imagen Licencia</label>
                    <div class="container-fluid">
                        <input type="file" name="imagen">
                    </div>
                </div>
                <br>
            </div>

            <br>
            <h1>Datos de Pasaporte </h1>
            <br>
            <div class="form-row">
                <div class="col-sm-4">
                    <label>No. Pasaporte</label>
                    <input type="text" class="form-control" placeholder="Número de Pasaporte" require>
                </div>


                <div class="col-sm-4">
                    <label>Imagen Pasaporte</label>
                    <div class="container-fluid">
                        <input type="file" name="imagen">
                    </div>
                </div>
                <br>
            </div>

            <br>
            <h1>Datos del Vehiculo </h1>
            <br>
            <div  class="form-row">
                <div class="col-sm-4">
                    <label>No.placa</label>
                    <input type="text" class="form-control" placeholder="Número de placa" require>
                </div>


                <div class="col-sm-4">
                    <label>Marca del vehiculo</label>
                    <div class="container-fluid">
                    <input type="text" class="form-control" placeholder="Marca" require>
                    </div>
                </div>
                <br>

                <div class="col-sm-4">
                <label>Tamaño</label>
                    <input type="text" class="form-control" placeholder="Tamaño"require>
                </div>

                <div class="col-sm-4">
                <label>Color</label>
                    <input type="text" class="form-control" placeholder="Color" require>
                </div>

                <div class="col-sm-4">
                <label>Peso</label>
                    <input type="text" class="form-control" placeholder="Peso en Kilogramos" require>
                </div>


                <div class="col-sm-4">
                <label>Ejes</label>
                <input type="text" class="form-control" placeholder="Ejes" require>
                </div>

                <div class="col-sm-4">
                <br>
                <label>Imagen de Tarjeta de Cirtuclación</label>
                <input type="file" name="imagen">
                </div>


            </div>


<!--datos del remolque-->
            <br>
            <h1>Datos del remolque</h1>
            <br>
            <br>
            <div id="mydivR" class="form-row">
                    
                    <div class="col-sm-4">
                    <label>Marca</label>
                        <input type="text" class="form-control" placeholder="Marca" require>
                    </div>

                    <div class="col-sm-4">
                    <label>Tamaño</label>
                        <input type="text" class="form-control" placeholder="Tamaño"require>
                    </div>

                    <div class="col-sm-4">
                    <label>Color</label>
                        <input type="text" class="form-control" placeholder="Color" require>
                    </div>

                    
                    <div class="col-sm-4">
                    <label>Placa</label>
                        <input type="text" class="form-control" placeholder="Número de placa" require>
                    </div>

                    <div class="col-sm-4">
                    <label>Peso</label>
                        <input type="text" class="form-control" placeholder="Peso en Kilogramos" require>
                    </div>


                    <div class="col-sm-4">
                    <label>Ejes</label>
                    <input type="text" class="form-control" placeholder="Ejes" require>
                    </div>

                    <div class="col-sm-4">
                    <label>Tipo de Remolque</label>
                        <select class="form-control">
                            <option>portaautomoviles</option>
                            <option>plataforma abierta</option>
                            <option>plataforma cerrada</option>
                            <option>cisterna</option>
                            <option>plataforma refigerada</option>
                        </select>
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-4">
                    <br>
                    <label>Imagen de Tarjeta de Cirtuclación</label>
                    <input type="file" name="imagen">
                    </div>
            
                    <div class="col-sm-4">
                    <label>Otros</label>
                    <br>
                    <textarea></textarea> 
                    </div>

            </div>
<!--termina datos del remolque-->
            


                <div class="container-fluid">
                    <br>
                    <br>
                    <center>
                        <input type="submit" class="btn btn-success" value="Aceptar">
                        <a href="menu_nuevo_piloto.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                        <input type="submit" class="btn btn-danger" value="cancelar">
                        
                    </center>
                </div>


    </form>

</div>
<button id="myboton" class="btn btn-warning" onclick="MostrarElemento()">Mas</button>
              
<script type="text/javascript">
    $("#mydivR").hide();//primero a suseder
    function MostrarElemento(){
        let text="";

        if($("#myboton")).text() === "m"){
            $("#mydivR").show();
            text="menos";
        }
        else
        {
            $("#mydivR").hide();
            text="mas";
        }

        $("#myboton").html(text);
    }
</script>



</body>
</html>