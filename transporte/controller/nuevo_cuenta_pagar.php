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
        /*if(isset($_GET['id']) and isset($_GET['mod'])and isset($_GET['id2'])){
        $id2=$_GET['id2'];
        $id=$_GET['id'];
        $descripcion=$_POST['descripcion'];
        $subtotal=$_POST['subtotal'];
        $au =new cuentapago();
        $au->ModificarDetalle($id,$id2,$descripcion,$subtotal);
        }*/
    }

}
else
{
    
    if(isset($_POST['codigo'])){
        $id_envio=$_POST['id_envio'];
        $pendiente=$_POST['pendiente'];
        $adelanto=$_POST['adelanto'];
        /*datos del cliente y envio*/        
        $codviaje=$_POST['codigo'];
        $id_pilotoviaje=$_POST['id_piloto'];
        echo $id_pilotoviaje;
        $au = new cuentapago();
        $au -> IngresarCuentaPagar($codviaje,$id_pilotoviaje,$pendiente,$adelanto);
        $au -> actualizardeposito($id_envio);
    }
    else
    {
        $cliente=new cuentapago();
        $dt=$cliente->VerPilotoExterno();
    }

}
?>