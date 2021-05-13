<?php
include_once("../model/classcliente.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $idempleado=$_GET['id'];
        $au =new Empleado();
        $au->  Eliminar($idempleado);
    }
    else
    {
        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $direccio=$_POST['direccion'];
        $idtipoempleado=$_POST['idtipoempleado'];
        $idempleado=$_GET['id'];
            $au =new Empleado();
            $au->ModificarEmpleados($idempleado,$nombre,$telefono,$direccio,$idtipoempleado);
    }

}
else
{
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $telefono2=$_POST['telefono2'];
    $correo=$_POST['correo'];
    $nit=$_POST['nit'];
    $cuenta=$_POST['cuenta'];
    $banco=$_POST['banco'];



    $nombreimg=$_FILES['imagen']['name'];//carga el nombre de la imagen
    $archivo=$_FILES['imagen']['tmp_name'];//carga el archivo
    $ruta="../imagenes";//es el nbombre de la carpeta
    $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
    move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta

         /*   $au =new Empleado();
            $au->IngresarEmpleados($nombre,$telefono,$direccio,$idtipoempleado);*/

        
    
}
?>