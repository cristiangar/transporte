<?php
include_once("../model/classAsignacionVehiculoEmpleado.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new cliente();
        $au->  Eliminar($id);
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){


        }
        else{
            $id = $_GET['id'];
            $asignacion=new Cabezal();
            $detalle=$asignacion->VerUno($id);
        }

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

        $au =new cliente();
        $au->Ingresarcliente($nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco);  

    }
    else
    {
        $cliente=new cliente();
        $dt=$cliente->Ver();
    }

}
?>