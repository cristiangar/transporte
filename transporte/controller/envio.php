<?php
include_once("../model/classdatos.php");


if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Cabezal();
        $au->  Eliminar($id);
        /*ELIMINAR*/
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){

                /*MODIFICAR*/

        }
        else{
            $id = $_GET['id'];
            $cabezal=new Cabezal();
            $detalle=$cabezal->VerUno($id);
            /*VER UNO*/
        }

    }

}
else
{
    if(isset($_POST ['cod']) and isset($_SESSION['idplataforma'])){

        echo "insert piloto con plataforma";
        $valor=$_SESSION['idplataforma'];
        echo $valor;
        unset($_SESSION['idplataforma']);
    }
    else
    {
        if(isset($_SESSION['idpiloto']) and isset($_SESSION['idvehiculo']))
        {
            echo "piloto y vehiculo sin plataforma";
        }
        else
        {
            echo "piloto y vehiculo tercero";
        }
    }

}
?>