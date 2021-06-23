<?php
include_once("../model/classPlataforma.php");

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
            $pmodelo=$_POST['pmodelo'];
            $pmarca=$_POST['pmarca'];
            $pcaat=$_POST['pcaat'];
            $pnumeco=$_POST['pnumeco'];

        if(empty($_FILES['imagencaat']['name'])){
            $pimagen='N/A';
        }
        else{
            $nombreimcaat=$_FILES['imagencaat']['name'];//carga el nombre de la imagen
            $archivocaat=$_FILES['imagencaat']['tmp_name'];//carga el archivo
            $pimagencaat="../imagen_caat";//es el nbombre de la carpeta
            $pimagencaat=$pimagencaat."/".$nombreimcaat;//la ruta de la imagen
            move_uploaded_file($archivocaat, $pimagencaat);//mueve la imagen ala ruta*/
        
        }
  
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
    if(isset($_POST ['ptamaño'])){

        $ptamaño=$_POST['ptamaño'];
        $pcolor=$_POST['pcolor'];
        $pejes=$_POST['pejes'];
        $ptipo=$_POST['ptipo'];
        $pplaca=$_POST['pplaca'];
        $otro=$_POST['otros'];
        $propiedad=$_POST['propiedad'];
        $pmodelo=$_POST['pmodelo'];
        $pmarca=$_POST['pmarca'];
        $pcaat=$_POST['pcaat'];
        $pnumeco=$_POST['pnumeco'];

        if(empty($_FILES['imagencaat']['name'])){
            $pimagen='N/A';
        }
        else{
            $nombreimcaat=$_FILES['imagencaat']['name'];//carga el nombre de la imagen
            $archivocaat=$_FILES['imagencaat']['tmp_name'];//carga el archivo
            $pimagencaat="../imagen_caat";//es el nbombre de la carpeta
            $pimagencaat=$pimagencaat."/".$nombreimcaat;//la ruta de la imagen
            move_uploaded_file($archivocaat, $pimagencaat);//mueve la imagen ala ruta*/
        
        }

        if(empty($_FILES['imagen']['name'])){
            $pimagen='N/A';
        }
        else{
            $nombreimgc=$_FILES['imagen']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imagen']['tmp_name'];//carga el archivo
            $pimagen="../imagen_tarjetas";//es el nbombre de la carpeta
            $pimagen=$pimagen."/".$nombreimgc;//la ruta de la imagen
            move_uploaded_file($archivo, $pimagen);//mueve la imagen ala ruta*/
        
        }
        $plataforma=new Plataforma();
        $plataforma->Ingresar($ptamaño,$pcolor,$pejes,$ptipo,$pplaca,$pimagen,$otro,$propiedad,$pmarca,$pmodelo,$pcaat,$pnumeco,$pimagencaat);

    }
    else
    {
        $plataforma=new Plataforma();
        $dt=$plataforma->Ver();
    }

}
?>