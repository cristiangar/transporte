<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Ventana padre</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
		<br>
		<br><br>

    <br>
	
    <label for="">Nombre del cliente: </label><button id="btnAbrir">Seleccionar Cliente:</button>
  
    <h1><p id="mensajeRecibido"></p></h1>
    <input type="text" id="mensajeRecibido2" value=''>
    <script src="../js/padre.js"></script>
    <?php  
    /*session_start();           
    $id=$_SESSION['idcliente']; */
  ?>
  </body>


    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Ventana padre</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <br>
    <br><br>

    <br>
  
    <label for="">Nombre del receptor: </label><button id="btnAbrirReceptor">Seleccionar Recetor:</button>
  
    <h1><p id="mensajeRecibidoReceptor"></p></h1>
    <input type="text" id="mensajeRecibidoReceptor2" value=''>
    <script src="../js/padre.js"></script>
    <?php  
    /*session_start();           
    $id=$_SESSION['idcliente']; */
  ?>
  </body>


</html>