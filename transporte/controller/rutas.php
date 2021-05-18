<?php
include_once("../model/classRutas.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Ruta();
        $au->  Eliminar($id);
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){
            $id=$_GET['id'];
            $origen=$_POST['origen'];
            $destino=$_POST['destino'];
            $cond=$_POST['codigo'];

            $au =new Ruta();
            $au->Modificar($id,$origen,$destino,$cond);

        }
        else{
            $id = $_GET['id'];
           /*$ruta=new Ruta();
            $dt=$ruta->VerUno($id);*/
        }

    }

}
else
{
    if(isset($_POST ['origen'])){

    $origen=$_POST['origen'];
    $destino=$_POST['destino'];
        $au =new Ruta();
        $au->Ingresar($origen,$destino);

    }
    else
    {
        $ruta=new Ruta();
        $dt=$ruta->Ver();
    }

}
?>