<?php
include_once("../model/classPersonal.php");

if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new Personal();
        $au->  Eliminar($id);
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){
            $id = $_GET['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $telefono=$_POST['telefono'];
            $telefono2=$_POST['telefono2'];
            $dpi=$_POST['dpi'];
            $correo=$_POST['correo'];
            $id_tipo_empleado=1;

            $au =new Personal();
            $au->ModificarPersonal($id,$nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$id_tipo_empleado);

        }
        else{
            $id = $_GET['id'];
            $personal=new Personal();
            $dt=$personal->VerUnPersonal($id);
        }

    }

}
else
{
    if(isset($_POST ['nombre'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $telefono2=$_POST['telefono2'];
    $dpi=$_POST['dpi'];
    $correo=$_POST['correo'];
    $id_tipo_empleado=$_POST['id_tipo_empleado'];
        $au =new Personal();
        $au->IngresarPersonal($id_tipo_empleado,$nombre,$apellido,$dpi,$telefono,$telefono2,$correo);

    }
    else
    {
        $personal=new Personal();
        $dt=$personal->VerPersonal();
    }

}
?>