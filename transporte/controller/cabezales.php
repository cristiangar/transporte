<?php
include_once("../model/classcabezales.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Plataforma();
        $au->  Eliminar($id);
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){
            echo 'modificar';
            $id=$_GET['id'];
            $ptamaño=$_POST['ptamaño'];
            $pcolor=$_POST['pcolor'];
            $pejes=$_POST['pejes'];
            $ppeso=$_POST['ppeso'];
            $ptipo=$_POST['ptipo'];
            $pplaca=$_POST['pplaca'];
            $otro=$_POST['otros'];
            $propiedad=$_POST['propiedad'];
  
            if(empty($_FILES['imagen']['name']))
            {
                $ruta=$_POST['ruta_targeta'];
                
            }
            else
            {
                $nombreimg=$_FILES['imagen']['name'];//carga el nombre de la imagen
                $archivo=$_FILES['imagen']['tmp_name'];//carga el archivo
                $ruta="../imagen_tarjetas";//es el nbombre de la carpeta
                $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
                move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta    
            }
            $plataforma=new Plataforma();
            $plataforma->Modificar($id,$ptamaño,$pcolor,$pejes,$ppeso,$ptipo,$pplaca,$pimagen,$otro,$propiedad);

        }
        else{
            $id = $_GET['id'];
            $plataforma=new Plataforma();
            $detalle=$plataforma->VerUno($id);
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
        $tipo=$_POST['tVehiculo'];
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
        /*$plataforma=new Plataforma();
        $plataforma->Ingresar($ptamaño,$pcolor,$pejes,$ppeso,$ptipo,$pplaca,$pimagen,$otro,$propiedad);*/

    }
    else
    {
        $cabezal=new Cabezal();
        $dt=$cabezal->Ver();
    }

}
?>