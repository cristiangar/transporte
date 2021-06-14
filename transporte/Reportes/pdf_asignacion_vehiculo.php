<?php 
include_once("plantilla.php");
include_once("../controller/envio.php");
$id=$_GET['id'];
while($row=mysqli_fetch_array($dt))
{
    
 

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
$pdf->Output('Asignacion vehiculo','S');

?>