<?php
include_once("../model/classcliente.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new cliente();
        $au->  Eliminar($id);
        
    }
    else
    {
        
        $id = $_GET['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $telefono2=$_POST['telefono2'];
        $correo=$_POST['correo'];
        $nit=$_POST['nit'];
        $cuenta=$_POST['cuenta'];
        $banco=$_POST['banco'];
        $au =new cliente();
        $au->ModificarCliente($id,$nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco);


    }

}
else
{
    if(isset($_POST ['nombre'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $telefono2=$_POST['telefono2'];
    $correo=$_POST['correo'];
    $nit=$_POST['nit'];
    $cuenta=$_POST['cuenta'];
    $banco=$_POST['banco'];
    /*$nombreimg=$_FILES['imagen']['name'];//carga el nombre de la imagen
    $archivo=$_FILES['imagen']['tmp_name'];//carga el archivo
    $ruta="../imagen_dpi";//es el nbombre de la carpeta
    $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
    move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta*/

        $au =new cliente();
        $au->Ingresarcliente($nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco);  

    }
    else
    {
        $cliente=new cliente();
        $dt2=$cliente->Verclientes();
    }

}
?>