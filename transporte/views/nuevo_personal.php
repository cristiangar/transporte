<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Personal</title>
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
            <a class="nav-link" >Nuevo Personal</a>
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
    $id=$_GET['id'];
    include_once('../controller/personal.php');
    $Personal=new Personal();
    $dtp=$Personal->VerUnPersonal($id);
    while ($row=mysqli_fetch_array($dt)) {
    $nombre=$row['nombre'];
    $apellido=$row['apellido'];
    $telefono=$row['telefono1'];
    $telefono2=$row['telefono2'];
    $dpi=$row['dpi'];
    $correo=$row['correo'];
    }

?>
    <form method="POST" action="../controller/personal.php?id=<?php echo $id?>&mod">
    <h1>Datos de la persona a modificar</h1>
    <br>
        <div class="form-row">
            <div class="col-sm-4">
            <label>Nombre</label>
                <input type="text" value=<?php echo $nombre;?> name='nombre' class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
            <label>Apellido</label>
                <input type="text" value=<?php echo $apellido;?> name='apellido' class="form-control" placeholder="Apellido"require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 1</label>
                <script>
                function mascara(valor) {
                    if (valor.match(/^\d{3}$/) !== null) {
                         return valor + '-';
                } else if (valor.match(/^\d{3}\-\d{4}$/) !== null) {
                return valor + '-';
                }
                return cadena;
                }
            </script>
                <input type="tel" name="telefono" class="form-control" placeholder="solo números" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}"  onkeyup="this.value = mascara(this.value)" maxlength="13" value="<?php echo  $telefono?>" require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 2</label>
                <script>
                function mascara(valor) {
                    if (valor.match(/^\d{3}$/) !== null) {
                         return valor + '-';
                } else if (valor.match(/^\d{3}\-\d{4}$/) !== null) {
                return valor + '-';
                }
                return cadena;
                }
            </script>
                <input type="tel" name="telefono2" class="form-control" placeholder="solo números" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}"  onkeyup="this.value = mascara(this.value)" maxlength="13" value="<?php echo  $telefono2?>" require>
            </div>
            <div class="col-sm-4">
            <label>No.DPI</label>
                <input type="text" name='dpi' value=<?php echo $dpi;?> class="form-control" placeholder="Número de DPI" require>
            </div>
            <div class="col-sm-4">
            <label>Correo</label>
                <input type="text" value=<?php echo $correo;?> name='correo' class="form-control" placeholder="Correo Electrónico" require>
            </div>
                
        </div>

        </div>
            <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="personal.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="submit" class="btn btn-danger" value="cancelar">
                
            </center>
            </div>
    </form>
<?php
}
else{
    ?>
    <form method="POST" action="../controller/personal.php">
    <h1>Datos de la persona</h1>
    <br>
        <div class="form-row">
            <div class="col-sm-4">
            <label>Nombre</label>
                <input type="text" name='nombre' class="form-control" placeholder="Nombre" require>
            </div>
            <div class="col-sm-4">
            <label>Apellido</label>
                <input type="text" name='apellido' class="form-control" placeholder="Apellido"require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 1</label>
                <script>
                function mascara(valor) {
                    if (valor.match(/^\d{3}$/) !== null) {
                         return valor + '-';
                } else if (valor.match(/^\d{3}\-\d{4}$/) !== null) {
                return valor + '-';
                }
                return cadena;
                }
            </script>
                <input type="tel" name="telefono" class="form-control" placeholder="solo números" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}"  onkeyup="this.value = mascara(this.value)" maxlength="13"  require>
            </div>
            <div class="col-sm-4">
            <label>Teléfono 2</label>
                <script>
                function mascara(valor) {
                    if (valor.match(/^\d{3}$/) !== null) {
                         return valor + '-';
                } else if (valor.match(/^\d{3}\-\d{4}$/) !== null) {
                return valor + '-';
                }
                return cadena;
                }
            </script>
                <input type="tel" name="telefono2" class="form-control" placeholder="solo números" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}"  onkeyup="this.value = mascara(this.value)" maxlength="13" require>
            </div>
            <div class="col-sm-4">
            <label>No.DPI</label>
                <input type="text" name='dpi' class="form-control" placeholder="Número de DPI" require>
            </div>
            <div class="col-sm-4">
            <label>Correo</label>
                <input type="text" name='correo' class="form-control" placeholder="Correo Electrónico" require>
            </div>

            <?php 
            include_once('../model/classPersonal.php');
                $tipo_empleado=new Personal();
                $dt=$tipo_empleado->Tipo_empleado();
            ?>
            <div class="col-sm-4">
                <label>Puesto</label>
                <select name="id_tipo_empleado" id="" class="form-control">
                <?php
                while($row=mysqli_fetch_array($dt)){
                    $valor=$row['id_rol_usuario'];
                    $texto=$row['nombre'];
                    echo '<option  value="'.$valor.'">'.$texto.'</option>';
                }
                ?>
                </select>
            </div>
                
        </div>

        </div>
            <div class="container-fluid wrapper fadeInDown col-sm-5">
                <br>
                <br>
            <center>
                <input type="submit" class="btn btn-success" value="Aceptar">
                <a href="personal.php"><button type="button" class="btn btn-warning" >Regresar</button></a>
                <input type="submit" class="btn btn-danger" value="cancelar">
                
            </center>
            </div>
    </form>

    <?php
}
?>
</div>
</body>
</html>