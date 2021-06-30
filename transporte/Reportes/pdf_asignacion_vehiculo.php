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

    if(($tvehiculo=="Cabezal") or ($tvehiculo==" cabezal")){
  
      $activador=1;
      $id_plataforma=$row['id_plataforma'];
      $pplaca=$row['placa'];
      $tipop=$row['tipo'];
      $colorp=$row['colorp'];
      $tamanio=$row['tamaño'];
      $dplataforma=$row['dplataforma'];

    
    }
    else
    {
      //echo 'es camion';
      $activador=0;
    }

}


$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(190,10,'Datos del piloto',0,'C',1);
$pdf->cell(40,10,'DPI:',0,1,'L');
$pdf->cell(40,10,'Nombre del piloto:',0,1,'L');
$pdf->cell(40,10,'Telefono piloto:',0,1,'L');
$pdf->cell(40,10,'No. licencia:',0,1,'L');
$pdf->cell(40,10,'Tipo licencia:',0,1,'L');
$pdf->cell(40,10,'No. pasaporte:',0,1,'L');
$pdf->cell(40,10,'Codigo caat:',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Sety(40);
$pdf->SetX(51);
$pdf->cell(40,10,$dpi,0,1,'L');
$pdf->Sety(50);
$pdf->SetX(51);
$pdf->cell(40,10,$piloto,0,1,'L');
$pdf->Sety(60);
$pdf->SetX(51);
$pdf->cell(40,10,$telefono,0,1,'L');
$pdf->Sety(70);
$pdf->SetX(51);
$pdf->cell(40,10,$licencia,0,1,'L');
$pdf->Sety(80);
$pdf->SetX(51);
$pdf->cell(40,10,$tipo_licencia,0,1,'L');
$pdf->Sety(90);
$pdf->SetX(51);
$pdf->cell(40,10,$pasaporte,0,1,'L');
/*datos del vehiculo */

$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(190,10,'Datos del vehiculo',0,'C',1);
$pdf->cell(40,10,'Tipo Vehiculo:',0,1,'L');
$pdf->cell(40,10,'Marca:',0,1,'L');
$pdf->cell(40,10,'Modelo:',0,1,'L');
$pdf->cell(40,10,'Placa:',0,1,'L');
$pdf->cell(40,10,utf8_decode('Tamaño:'),0,1,'L');
$pdf->cell(40,10,'Ejes:',0,1,'L');
$pdf->cell(40,10,'Color:',0,1,'L');
$pdf->cell(40,10,'Descripcion:',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Sety(110);
$pdf->SetX(51);
$pdf->cell(40,10,$tvehiculo,0,1,'L');
$pdf->Sety(120);
$pdf->SetX(51);
$pdf->cell(40,10,$marca,0,1,'L');
$pdf->Sety(130);
$pdf->SetX(51);
$pdf->cell(40,10,$modelo,0,1,'L');
$pdf->Sety(140);
$pdf->SetX(51);
$pdf->cell(40,10,$placa,0,1,'L');
$pdf->Sety(150);
$pdf->SetX(51);
$pdf->cell(40,10,$tamaño,0,1,'L');
$pdf->Sety(160);
$pdf->SetX(51);
$pdf->cell(40,10,$ejes,0,1,'L');
$pdf->Sety(170);
$pdf->SetX(51);
$pdf->cell(40,10,$color,0,1,'L');
$pdf->Sety(183);
$pdf->SetX(51);
$pdf->MultiCell(150,5,$descripcion,1,1,'L');
/**si es cabezal con plataforma */
if($activador=="1"){
  $pdf->cell(200,10,'',0,1,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->MultiCell(190,10,'Datos del Remolque',0,'C',1);
  $pdf->cell(40,10,'Tipo de plataforma:',0,1,'L');
  $pdf->cell(40,10,utf8_decode('Tamaño de plataforma:'),0,1,'L');
  $pdf->cell(40,10,'No.Placa de la plataforma:',0,1,'L');
  $pdf->cell(40,10,'Descripcion:',0,1,'L');
  
  $pdf->SetFont('Arial','',12);
  $pdf->Sety(205);
  $pdf->SetX(65);
  $pdf->cell(40,10,$tipop,0,1,'L');
  $pdf->Sety(215);
  $pdf->SetX(65);
  $pdf->cell(40,10,$tamanio,0,1,'L');
  $pdf->Sety(225);
  $pdf->SetX(65);
  $pdf->cell(40,10,$pplaca,0,1,'L');
  $pdf->Sety(240);
  $pdf->SetX(51);
  $pdf->MultiCell(150,5,$dplataforma,1,1,'L');
}
 

$pdf->Output('Asignacion vehiculo','I');

?>