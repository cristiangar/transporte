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
            $asignacion=new asignacion();
            $detalle=$asignacion->VerUno($id);
        }

    }

}
else
{
    if(isset($_POST ['nombre'])){

        /**ingresars */

    }
    else
    {
        $cliente=new asignacion();
        $dt=$cliente->Ver();
    }

}
?>