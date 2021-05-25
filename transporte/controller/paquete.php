<?php
include_once("../model/classpaquete.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new paquete();
        $au->  Eliminar($id);
        
    }
    else
    {
        
        /*$id = $_GET['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $telefono2=$_POST['telefono2'];
        $correo=$_POST['correo'];
        $nit=$_POST['nit'];
        $cuenta=$_POST['cuenta'];
        $banco=$_POST['banco'];
        $au =new cliente();
        $au->ModificarCliente($id,$nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco);*/


    }

}
else
{
    if(isset($_POST ['peso'])){

    $peso=$_POST['peso'];
    $direccione=$_POST['direccione'];
    $direccionenvi=$_POST['direccionenvi'];
    $descripcion=$_POST['descripcion'];
    $ruta=$_POST['id_ruta'];
    

        $au =new paquete();
        $au->Ingresarpaquete($peso,$direccione,$direccionenvi,$descripcion,$ruta);  

    }
    else
    {
        $cliente=new paquete();
        $dt2=$cliente->Verpaquete();
    }

}
?>