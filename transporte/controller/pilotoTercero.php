<?php
include_once("../model/classPilotoTercero.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new PilotoTercero();
        $au->  Eliminar($id);
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){
            $id=$_GET['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $dpi=$_POST['dpi'];
            $telefono=$_POST['telefono1'];
            $telefono2=$_POST['telefono2'];
            $correo=$_POST['correo'];
            if(empty($_FILES['imgDPI']['name']))
            {
                $ruta=$_POST['ruta_dpi'];
                
            }
            else
            {
                $nombreimg=$_FILES['imgDPI']['name'];//carga el nombre de la imagen
                $archivo=$_FILES['imgDPI']['tmp_name'];//carga el archivo
                $ruta="../imagen_dpi";//es el nbombre de la carpeta
                $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
                move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta    
            }
            $licencia=$_POST['licencia'];
            $tlicencia=$_POST['tlicencia'];
            if(empty($_FILES['imglicencia']['name'])){/**licencia */
                $ruta_licencia=$_POST['ruta_licencia'];
                
            }
            else{
                $nombreimgl=$_FILES['imglicencia']['name'];//carga el nombre de la imagen
                $archivo=$_FILES['imglicencia']['tmp_name'];//carga el archivo
                $ruta_licencia="../imagen_licencia";//es el nbombre de la carpeta
                $ruta_licencia=$ruta_licencia."/".$nombreimgl;//la ruta de la imagen
                move_uploaded_file($archivo, $ruta_licencia);//mueve la imagen ala ruta*/
            }
            $pasaporte=$_POST['pasaporte'];
            if(empty($_FILES['imgPasaporte']['name'])){
                $ruta_pasaporte=$_POST['ruta_pasaporte'];
                
            }
            else{
                $nombreimgp=$_FILES['imgPasaporte']['name'];//carga el nombre de la imagen
                $archivo=$_FILES['imgPasaporte']['tmp_name'];//carga el archivo
                $ruta_pasaporte="../imagen_pasaporte";//es el nbombre de la carpeta
                $ruta_pasaporte=$ruta_pasaporte."/".$nombreimgp;//la ruta de la imagen
                move_uploaded_file($archivo, $ruta_pasaporte);//mueve la imagen ala ruta*/
            }
            $caat=$_POST['caat'];
            if(empty($_FILES['imgCaat']['name'])){
                $ruta_caat=$_POST['ruta_caat'];
                
            }
            else{
                $nombreimgc=$_FILES['imgCaat']['name'];//carga el nombre de la imagen
                $archivo=$_FILES['imgCaat']['tmp_name'];//carga el archivo
                $ruta_caat="../imagen_caat";//es el nbombre de la carpeta
                $ruta_caat=$ruta_caat."/".$nombreimgc;//la ruta de la imagen
                move_uploaded_file($archivo, $ruta_caat);//mueve la imagen ala ruta*/
            
            }
            $au =new Piloto();
            $au->Modificar($id,$nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$ruta,$licencia,$tlicencia,$ruta_licencia,$pasaporte,$ruta_pasaporte,$caat,$ruta_caat);
    

        }
        else{
            $id = $_GET['id'];
            $piloto=new Piloto();
            $dt=$piloto->VerUno($id);
        }

    }

}
else
{
    if(isset($_POST ['nombre'])){

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $dpi=$_POST['dpi'];
        $telefono=$_POST['telefono1'];
        $telefono2=$_POST['telefono2'];
        $correo=$_POST['correo'];
        if(empty($_FILES['imgDPI']['name'])){/*valido si hay imagen de dpi*/
            $ruta='N/A';    
        }
        else{
            $nombreimg=$_FILES['imgDPI']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imgDPI']['tmp_name'];//carga el archivo
            $ruta="../imagen_dpi";//es el nbombre de la carpeta
            $ruta=$ruta."/".$nombreimg;//la ruta de la imagen
            move_uploaded_file($archivo, $ruta);//mueve la imagen ala ruta
        }
    

        $licencia=$_POST['licencia'];
        $tlicencia=$_POST['tlicencia'];
        if(empty($_FILES['imglicencia']['name'])){/**licencia */
            $ruta_licencia='N/A';
        }
        else{
            $nombreimgl=$_FILES['imglicencia']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imglicencia']['tmp_name'];//carga el archivo
            $ruta_licencia="../imagen_licencia";//es el nbombre de la carpeta
            $ruta_licencia=$ruta_licencia."/".$nombreimgl;//la ruta de la imagen
            move_uploaded_file($archivo, $ruta_licencia);//mueve la imagen ala ruta*/
        }
        

        $pasaporte=$_POST['pasaporte'];
        if(empty($_FILES['imgPasaporte']['name'])){
            $ruta_pasaporte='N/A';
        }
        else{
            $nombreimgp=$_FILES['imgPasaporte']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imgPasaporte']['tmp_name'];//carga el archivo
            $ruta_pasaporte="../imagen_pasaporte";//es el nbombre de la carpeta
            $ruta_pasaporte=$ruta_pasaporte."/".$nombreimgp;//la ruta de la imagen
            move_uploaded_file($archivo, $ruta_pasaporte);//mueve la imagen ala ruta*/
        }
    

        $caat=$_POST['caat'];
        if(empty($_FILES['imgCaat']['name'])){
            $ruta_caat='N/A';
        }
        else{
            $nombreimgc=$_FILES['imgCaat']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imgCaat']['tmp_name'];//carga el archivo
            $ruta_caat="../imagen_caat";//es el nbombre de la carpeta
            $ruta_caat=$ruta_caat."/".$nombreimgc;//la ruta de la imagen
            move_uploaded_file($archivo, $ruta_caat);//mueve la imagen ala ruta*/
        
        }

        /*datos del veiculo*/
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $tonelaje=$_POST['tonelaje'];
        $placa=$_POST['placa'];
        $color=$_POST['color'];
        $tipo=$_POST['tVehiculo'];
        $descripcion=$_POST['descripcion'];
        $tamaño=$_POST['tamaño'];
        $ejes=$_POST['ejes'];
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

        /**datos del remolque */
        $pmarca=$_POST['pmarca'];
        $ptamaño=$_POST['ptamaño'];
        $pcolor=$_POST['pcolor'];
        $pejes=$_POST['pejes'];
        $ppeso=$_POST['ppeso'];
        $ptipo=$_POST['ptipo'];
        $pplaca=$_POST['pplaca'];
        if(empty($_FILES['imgremolque']['name'])){
            $pimagen='N/A';
        }
        else{
            $nombreimgc=$_FILES['imgremolque']['name'];//carga el nombre de la imagen
            $archivo=$_FILES['imgremolque']['tmp_name'];//carga el archivo
            $pimagen="../imagen_tarjetas";//es el nbombre de la carpeta
            $pimagen=$pimagen."/".$nombreimgc;//la ruta de la imagen
            move_uploaded_file($archivo, $pimagen);//mueve la imagen ala ruta*/
        
        }
        
        if($pmarca=='N/A')
        {
            $au =new PilotoTercero();
            $au->Ingresar($nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$ruta,$licencia,$tlicencia,$ruta_licencia,$pasaporte,$ruta_pasaporte,$caat,$ruta_caat);
            $au->functionIngrearVehiculo($marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$tipo,$tamaño,$ejes,$color);
            
        }
        else
        {
            $au =new PilotoTercero();
            $au->Ingresar($nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$ruta,$licencia,$tlicencia,$ruta_licencia,$pasaporte,$ruta_pasaporte,$caat,$ruta_caat);
            $au->functionIngrearVehiculo($marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$tipo,$tamaño,$ejes,$color);
            $au-> IngrearPlataforma($ptamaño,$pcolor,$pejes,$ppeso,$ptipo,$pplaca,$pimagen);
            
        }

    }
    else
    {
        $piloto=new Piloto();
        $dt=$piloto->Ver();
    }

}
?>