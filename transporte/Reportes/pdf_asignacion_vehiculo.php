<?php 
include_once("plantilla_2.php");
include_once("../controller/asignacion_vehiculo_empleado.php");
$id=$_GET['id'];
while($row=mysqli_fetch_array($detalle))
{
    
    $piloto=$row['piloto'];
    $dpi=$row['dpi'];
    $ruta_dpi=$row['ruta_imagen_dpi'];
    $telefono=$row['telefono'];
    $licencia=$row['licencia'];
    $tipo_licencia=$row['tipo_licencia'];
    $ruta_licencia=$row['ruta_imagen_licencia'];
    $pasaporte=$row['pasaporte'];
    $ruta_pasaporte=$row['ruta_imagen_pasaporte'];
    $codigo_caat=$row['codigo_caat'];
    $ruta_caat=$row['ruta_imagen_caat'];
    /**vehiculo */
    $marca=$row['marca'];
    $modelo=$row['modelo'];
    $ruta_tarjeta=$row['ruta_imagen_tarjeta'];
    $placa=$row['no_placa'];
    $tvehiculo=$row['tipo_vehiculo'];
    $tamaño=$row['tamaño'];
    $ejes=$row['ejes'];
    $color=$row['color'];
    $descripcion=$row['descripcion'];

    /*if(($tipo_vehivulo=="Cabezal") or ($tipo_vehivulo=="cabezal")){
  
      $activador=1;
    
    }
    else
    {
      //echo 'es camion';
      $activador=0;
    }
    if($autorizacion==0){
      $au="Sin Autorizar";
    }
    else{
      $au="Autorizado";
    }*/

}

$pdf=new PDF();
$pdf->AddPage();

/*if($activador=="1"){

 
}    */
$pdf->Close();
$pdf->Output('Asignacion vehiculo','I');

?>