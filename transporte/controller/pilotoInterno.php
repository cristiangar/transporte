<?php
include_once("../model/ClassPilotoInterno.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Piloto();
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
            $whatsApp=$_POST['telefono2'];
            $banco=$_POST['banco'];
            $cuenta=$_POST['cuenta_banco'];
            $nombre_cuenta=$_POST['Nbanco'];
            $tipo_cuenta=$_POST['tipo_cuenta']; 
            $nombre_emergencia=$_POST['contacto_emergencia'];
            $numero_emergencia=$_POST['numero_emergencia'];
            $correo=$_POST['correo'];
            $id_tipo_empleado=$_POST['id_tipo_empleado'];

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
            $au =new Piloto();
            $au->Modificar($id,$nombre, $apellido, $dpi, $telefono, $whatsApp, $licencia, $tlicencia, $pasaporte, $ruta_licencia, $ruta_pasaporte, $ruta,$id_tipo_empleado, $cuenta, $correo, $banco, $nombre_emergencia, $numero_emergencia,$nombre_cuenta,$tipo_cuenta);
    

        }
        else{
            $id = $_GET['id'];
            $piloto=new Piloto();
            $dt=$piloto->VerUno($id);
            $dt2=$piloto->tipo();
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
        $whatsApp=$_POST['telefono2'];
        
        $banco=$_POST['banco'];
        $cuenta=$_POST['cuenta_banco'];
        $nombre_cuenta=$_POST['Nbanco'];
        $tipo_cuenta=$_POST['tipo_cuenta'];  
       
        $nombre_emergencia=$_POST['contacto_emergencia'];
        $numero_emergencia=$_POST['numero_emergencia'];
        $correo=$_POST['correo'];
        $id_tipo_empleado=$_POST['id_tipo_empleado'];

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
    
        $au =new Piloto();
        $au->Ingresar($nombre, $apellido, $dpi, $telefono, $whatsApp, $licencia, $tlicencia, $pasaporte, $ruta_licencia, $ruta_pasaporte, $ruta,$id_tipo_empleado, $cuenta, $correo, $banco, $nombre_emergencia, $numero_emergencia,$nombre_cuenta,$tipo_cuenta);

    }
    else
    {
        $piloto=new Piloto();
        $dt=$piloto->Ver();
    }

}
?>