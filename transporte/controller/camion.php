<?php
include_once("../model/classCamion.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Camion();
        $au->  Eliminar($id);
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){
            $id=$_GET['id'];
            $marca=$_POST['marca'];
            $modelo=$_POST['modelo'];
            $tonelaje=$_POST['tonelaje'];
            $placa=$_POST['placa'];
            $color=$_POST['color'];
            $descripcion=$_POST['descripcion'];
            $tamaño=$_POST['tamaño'];
            $ejes=$_POST['ejes'];
            $propiedad=$_POST['propiedad'];
            if(empty($_FILES['imgTargetaVeiculo']['name'])){
                $ruta_tarjeta=$_POST['ruta'];
            }
            else{
                $nombreimgc=$_FILES['imgTargetaVeiculo']['name'];//carga el nombre de la imagen
                $archivo=$_FILES['imgTargetaVeiculo']['tmp_name'];//carga el archivo
                $ruta_tarjeta="../imagen_tarjetas";//es el nbombre de la carpeta
                $ruta_tarjeta=$ruta_tarjeta."/".$nombreimgc;//la ruta de la imagen
                move_uploaded_file($archivo, $ruta_tarjeta);//mueve la imagen ala ruta*/
            
            }
            $cabezal=new Camion();
            $cabezal->Modificar($id,$marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$propiedad,$tamaño,$ejes,$color);

        }
        else{
            $id = $_GET['id'];
            $cabezal=new Camion();
            $detalle=$cabezal->VerUno($id);
        }

    }

}
else
{
    if(isset($_POST ['marca'])){

        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $tonelaje=$_POST['tonelaje'];
        $placa=$_POST['placa'];
        $color=$_POST['color'];
        $descripcion=$_POST['descripcion'];
        $tamaño=$_POST['tamaño'];
        $ejes=$_POST['ejes'];
        $propiedad=$_POST['propiedad'];
        if(empty($_FILES['imgTargetaVeiculo']['name'])){
            $ruta_tarjeta='N/A';
        }
        else{
            $nombreimgc=$_FILES['imgTargetaVeiculo']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imgTargetaVeiculo']['tmp_name'];//carga el archivo
            $ruta_tarjeta="../imagen_tarjetas";//es el nbombre de la carpeta
            $ruta_tarjeta=$ruta_tarjeta."/".$nombreimgc;//la ruta de la imagen
            move_uploaded_file($archivo, $ruta_tarjeta);//mueve la imagen ala ruta*/
        
        }
        $cabezal=new Camion();
        $cabezal->Ingresar($marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$propiedad,$tamaño,$ejes,$color);

    }
    else
    {
        $camion=new Camion();
        $dt=$camion->Ver();
    }

}
?>