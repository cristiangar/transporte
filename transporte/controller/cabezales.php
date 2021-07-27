<?php
include_once("../model/classcabezales.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Cabezal();
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
            //$tamaño=$_POST['tamaño'];
            $tamaño='N/A';
            $ejes=$_POST['ejes'];
            $propiedad=$_POST['propiedad'];
            $tipo_vehiculo=$_POST['tipo_vehiculo'];
            $pcaat=$_POST['pcaat'];
            $codaduanero=$_POST['codaduanero'];
            $codtransporte=$_POST['codtransporte'];
            

        if(empty($_FILES['imagencaat']['name'])){
            $pimagencaat=$_POST['ruta_caat'];
        }
        else{
            $nombreimcaat=$_FILES['imagencaat']['name'];//carga el nombre de la imagen
            $archivocaat=$_FILES['imagencaat']['tmp_name'];//carga el archivo
            $pimagencaat="../imagen_caat";//es el nbombre de la carpeta
            $pimagencaat=$pimagencaat."/".$nombreimcaat;//la ruta de la imagen
            move_uploaded_file($archivocaat, $pimagencaat);//mueve la imagen ala ruta*/
        
        }
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
            $cabezal=new Cabezal();
            $cabezal->Modificar($id,$marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$propiedad,$tipo_vehiculo,$tamaño,$ejes,$color,$pimagencaat,$pcaat,$codaduanero,$codtransporte);

        }
        else{
            $id = $_GET['id'];
            $cabezal=new Cabezal();
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
        //tamaño=$_POST['tamaño'];
        $ejes=$_POST['ejes'];
        $propiedad=$_POST['propiedad'];
        $tipo_vehiculo=$_POST['tipo_vehiculo'];
        $pcaat=$_POST['pcaat'];
            $codaduanero=$_POST['codaduanero'];
            $codtransporte=$_POST['codtransporte'];

        if(empty($_FILES['imagencaat']['name'])){
            $pimagencaat='N/A';
        }
        else{
            $nombreimcaat=$_FILES['imagencaat']['name'];//carga el nombre de la imagen
            $archivocaat=$_FILES['imagencaat']['tmp_name'];//carga el archivo
            $pimagencaat="../imagen_caat";//es el nbombre de la carpeta
            $pimagencaat=$pimagencaat."/".$nombreimcaat;//la ruta de la imagen
            move_uploaded_file($archivocaat, $pimagencaat);//mueve la imagen ala ruta*/
        
        }
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
        $cabezal=new Cabezal();
        $cabezal->Ingresar($marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$propiedad,$tipo_vehiculo,$ejes,$color,$pimagencaat,$pcaat,$codaduanero,$codtransporte);

    }
    else
    {
        $cabezal=new Cabezal();
        $dt=$cabezal->Ver();
    }

}
?>