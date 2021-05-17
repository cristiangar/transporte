<?php
include_once("../model/classtipo_empleado.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new tipo();
        $au->  Eliminar($id);
        
    }
    else
    {
        
        $id = $_GET['id'];
        $cargo=$_POST['cargo'];

        /*echo $id;
        echo $cargo;*/
        
        $au =new tipo();
        $au->ModificarTipoEmpleado($id,$cargo);


    }

}
else
{
    if(isset($_POST ['cargo'])){

    $cargo=$_POST['cargo'];

    /*$nombreimg=$_FILES['imagen']['name'];//carga el nombre de la imagen
    $archivo=$_FILES['imagen']['tmp_name'];//carga el archivo
    $ruta="../imagen_dpi";//es el nbombre de la carpeta
    $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
    move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta*/

        $au =new tipo();
        $au->IngresarTipoEmpleado($cargo);  

    }
    else
    {
        $tipo=new tipo();
        $dt=$tipo->VerTipoEmpleado();
    }

}
?>