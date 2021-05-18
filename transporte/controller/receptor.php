<?php
include_once("../model/classreceptor.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Receptor();
        $au->  Eliminar($id);
        
    }
    else
    {
        
        $id = $_GET['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $telefono2=$_POST['telefono2'];
        $au =new Receptor();
        $au->ModificarReceptor($id,$nombre,$apellido,$telefono,$telefono2);


    }

}
else
{
    if(isset($_POST ['nombre'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $telefono2=$_POST['telefono2'];
    
    /*$nombreimg=$_FILES['imagen']['name'];//carga el nombre de la imagen
    $archivo=$_FILES['imagen']['tmp_name'];//carga el archivo
    $ruta="../imagen_dpi";//es el nbombre de la carpeta
    $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
    move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta*/

        $au =new Receptor();
        $au->IngresarReceptor($nombre,$apellido,$telefono,$telefono2);  

    }
    else
    {
        $receptor=new Receptor();
        $dt2=$receptor->VerReceptor();
    }

}
?>