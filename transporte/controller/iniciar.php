<?php
include_once("../model/classiniciar.php");
if(isset($_GET['I']) and isset($_GET['id']))
{
    $id=$_GET['id'];
    $au =new Iniciar_envio();
    $au->iniciar($id);
}
else
{
    if(isset($_GET['T']))
    {

    }
    else{
        $iniciar_ver=new Iniciar_envio();
        $dt=$iniciar_ver->Ver();
    }
}
?>