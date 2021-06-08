<?php
include_once("../model/classnuevoencabezado.php");

if (isset($_GET['id2']))
{
    
    if (isset($_GET['id2']) and isset($_GET['es'])and isset($_GET['id'])) {//valida si es modificar o eliminar
        $id=$_GET['id2'];
        $ide=$_GET['id'];
        $au =new encabezado();
        $au->Eliminar($id,$ide);
        
    }
    else 
    {
        if(isset($_GET['id']) and isset($_GET['mod'])and isset($_GET['id2'])){
        $id2=$_GET['id2'];
        $id=$_GET['id'];
        $descripcion=$_POST['descripcion'];
        $subtotal=$_POST['subtotal'];
        $au =new encabezado();
        $au->ModificarDetalle($id,$id2,$descripcion,$subtotal);
        }
    }

}
else
{
    
    if(isset($_POST['total'])and isset($_POST['anticipo'])){
        $total=$_POST['total'];
        $anticipo=$_POST['anticipo'];
        /*datos del cliente y envio*/
        $id_cliente=$_SESSION['idcliente'];
        $id_envio=$_SESSION['idenvio'];
        /*$id_envio=$_GET['idenvio'];
        $id_cliente=$_GET['idcliente'];*/

        $au = new encabezado();
        $au -> IngresarEncabezado2($total,$anticipo,$id_envio, $id_cliente);
    }
    else
    {
        $cliente=new encabezado();
        $dt=$cliente->VerEncabezado();
    }

}
?>