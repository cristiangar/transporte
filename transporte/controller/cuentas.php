<?php
include_once("../model/classcuenta.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new cuenta();
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
        $au =new cuenta();
        $au->ModificarCuenta($id,$nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco);*/


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

        $au =new cuenta();
        $au->IngresarCueta($nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco);  

    }
    else
    {
        $cliente=new cuenta();
        $dt2=$cliente->VerCuentas();
    }

}
?>