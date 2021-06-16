<?php
include_once("../model/classnuevocuentapago.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new cuentapago();
        $au->Eliminar($id);
        
    }
    else 
    {
        if(isset($_GET['id']) and isset($_GET['mod'])and isset($_GET['id2'])){
        $id2=$_GET['id2'];
        $id=$_GET['id'];
        $descripcion=$_POST['descripcion'];
        $subtotal=$_POST['subtotal'];
        $au =new cuentapago();
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
        $id_cliente=$_SESSION['idpiloto'];
        
        /*$id_envio=$_GET['idenvio'];
        $id_cliente=$_GET['idcliente'];*/

        $au = new cuentapago();
        $au -> IngresarEncabezado2($total,$anticipo, $id_cliente);
    }
    else
    {
        $cliente=new cuentapago();
        $dt=$cliente->VerPilotoExterno();
    }

}
?>