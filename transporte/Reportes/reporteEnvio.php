<?php 
include_once("plantilla.php");
include_once("../controller/envio.php");
$id=$_GET['id'];
while($row=mysqli_fetch_array($dt))
{
    /**datos del envio */
    $id=$row['id_envio'];
    $codigo_envio=$row['codigo_envio'];
    $fenvio=$row['fecha_envio'];
    $fentrega=$row['fecha_entrega'];
    $autorizacion=$row['autorizacion'];
    /**datos del receptor y emisor */
    $id_cliente=$row['id_cliente'];
    $cliente=$row['cliente'];
    $tel_cliente=$row['tel_cliente'];
    $id_receptor=$row['id_receptor'];
    $receptor=$row['receptor'];
    $tel_receptor=$row['tel_receptor'];
    $imegen_dpi=$row['ruta_imagen_dpi'];
    $imegen_licencia=$row['ruta_imagen_licencia'];
    $imegen_pasaporte=$row['ruta_imagen_pasaporte'];
    /**datos del envio */
    $peso=$row['peso'];
    $direccion_entrega=$row['direccion_entrega'];
    $direccion_envio=$row['direccion_envio'];
    $codigo_ruta=$row['codigo_ruta'];
    $origen=$row['pais_origen'];
    $destino=$row['pais_destino'];
    $dpaquete=$row['dpaquete'];
    /**datos del piloto */
    $id_piloto=$row['id_empleado'];
    $piloto=$row['piloto'];
    $tel_piloto=$row['telefono1'];
    $marca=$row['marca'];
    $placa=$row['no_placa'];
    $interno_externo=$row['tipo_interno_externo'];
    $tipo_vehivulo=$row['tipo_vehiculo'];
    $descripcion=$row['descripcion'];
    $imagen_tarjeta=$row['ruta_imagen_tarjeta'];

    if(($tipo_vehivulo=="Cabezal") or ($tipo_vehivulo=="cabezal")){
      $placa_plataforma=$row['placa'];
      $tipo_plataforma=$row['tipo'];
      $color_plataforma=$row['color'];
      $tamanio_plataforma=$row['tamaño'];
      $descripcion_plataforma=$row['dplataforma'];
      $tplataforma=$row['tplataforma'];
      $imagen_tarjeta_plataforma=$row['ruta_imagen_targeta'];
      
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
    }

}

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(75,10,'Datos del cliente y del receptor',0,'C',1);
$pdf->cell(40,10,'Nombre del cliente:',0,1,'L');
$pdf->cell(40,10,'Telefono cliente:',0,1,'L');
$pdf->cell(40,10,'Nombre receptor:',0,1,'L');
$pdf->cell(40,10,'Telefono receptor:',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Sety(50);
$pdf->SetX(51);
$pdf->cell(40,10,utf8_decode($cliente),0,1,'L');
$pdf->Sety(60);
$pdf->SetX(51);
$pdf->cell(40,10,$tel_cliente,0,1,'L');
$pdf->Sety(70);
$pdf->SetX(51);
$pdf->cell(40,10,utf8_decode($receptor),0,1,'L');
$pdf->Sety(80);
$pdf->SetX(51);
$pdf->cell(40,10,$tel_receptor,0,1,'L');


/**datos del envio */
$pdf->Sety(40);
$pdf->SetX(100);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(80,10,'Datos del Envio',0,'C',1);
$pdf->Sety(50);
$pdf->SetX(100);
$pdf->cell(40,10,'Codigo de envio:',0,1,'L');
$pdf->Sety(60);
$pdf->SetX(100);
$pdf->cell(40,10,'Fecha de envio:',0,1,'L');
$pdf->Sety(70);
$pdf->SetX(100);
$pdf->cell(40,10,'Fecha de entrega:',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Sety(50);
$pdf->SetX(140);
$pdf->cell(40,10,$codigo_envio,0,1,'L');
$pdf->Sety(60);
$pdf->SetX(140);
$pdf->cell(40,10,$fenvio,0,1,'L');
$pdf->Sety(70);
$pdf->SetX(140);
$pdf->cell(40,10,$fentrega,0,1,'L');
$pdf->cell(40,10,"",0,1,'L'); 
/**datos del paquete */
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(170,10,'Datos del Paquete',0,'C',1);
$pdf->cell(40,10,'Codigo de ruta:',0,1,'L');
$pdf->cell(40,10,'Pais destino:',0,1,'L');
$pdf->cell(40,10,'Pais origen:',0,1,'L');
$pdf->cell(40,10,'Descripcion del envio:',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Sety(100);
$pdf->SetX(51);
$pdf->cell(40,10,$codigo_ruta,0,1,'L');
$pdf->Sety(110);
$pdf->SetX(51);
$pdf->cell(40,10,utf8_decode($destino),0,1,'L');
$pdf->Sety(120);
$pdf->SetX(51);
$pdf->cell(40,10,utf8_decode($origen),0,1,'L');
$pdf->Sety(140);
$pdf->SetX(10);
$pdf->MultiCell(170,10,utf8_decode($dpaquete),0,'L',0);
/**datos del vehiculo */
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(170,10,'Datos del Vehiculo y del piloto',0,'C',1);
$pdf->cell(40,10,'Nombre del piloto:',0,1,'L');
$pdf->cell(40,10,'Telefono del piloto:',0,1,'L');
$pdf->cell(40,10,'Marca del vehiculo:',0,1,'L');
$pdf->cell(40,10,'Tipo de vehiculo:',0,1,'L');
$pdf->cell(40,10,'No. placa del vehiculo:',0,1,'L');
$pdf->cell(40,10,'Descripcion del vehiculo:',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Sety(160);
$pdf->SetX(62);
$pdf->cell(40,10,$piloto,0,1,'L');
$pdf->Sety(170);
$pdf->SetX(62);
$pdf->cell(40,10,$tel_piloto,0,1,'L');
$pdf->Sety(180);
$pdf->SetX(62);
$pdf->cell(40,10,$marca,0,1,'L');
$pdf->Sety(190);
$pdf->SetX(62);
$pdf->cell(40,10,$tipo_vehivulo,0,1,'L');
$pdf->Sety(200);
$pdf->SetX(62);
$pdf->cell(40,10,$placa,0,1,'L');
$pdf->Sety(220);
$pdf->SetX(10);
$pdf->MultiCell(170,5,$descripcion,0,'L',0);
/**remolque */
if($activador=="1"){
  $pdf->AddPage();
  $pdf->cell(40,10,'',0,1,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->MultiCell(170,10,'Datos de la plataforma',0,'C',1);
  $pdf->cell(40,10,'No placa del remolque:',0,1,'L');
  $pdf->cell(40,10,'Tipo de remolque:',0,1,'L');
  $pdf->cell(40,10,utf8_decode('Tamaño del remolque:'),0,1,'L');
  $pdf->cell(40,10,'Color del remolque',0,1,'L');
  $pdf->cell(40,10,'Descripcion del remolque:',0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Sety(60);
  $pdf->SetX(65);
  $pdf->cell(40,10,$placa_plataforma,0,1,'L');
  $pdf->Sety(70);
  $pdf->SetX(65);
  $pdf->cell(40,10,$tipo_plataforma,0,1,'L');
  $pdf->Sety(80);
  $pdf->SetX(65);
  $pdf->cell(40,10,$tamanio_plataforma,0,1,'L');
  $pdf->Sety(90);
  $pdf->SetX(65);
  $pdf->cell(40,10,$color_plataforma,0,1,'L');

  $pdf->Sety(110);
  $pdf->SetX(10);
  $pdf->MultiCell(170,5,$descripcion_plataforma,0,'L',0);


$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(75,10,'Imagenes documentos del equipo de arrastre:',0,'C',0); 
$pdf->image($imagen_tarjeta_plataforma,50,51,130); 

}   

$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(75,10,'Imagenes documentos del piloto:',0,'C',0);

$pdf->image($imegen_dpi,50,51,80); 
$pdf->image($imegen_licencia,50,110,80); 
$pdf->image($imegen_pasaporte,50,170,80); 

$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(75,10,'Imagenes documentos del vehiculo:',0,'C',0);

$pdf->image($imagen_tarjeta,50,51,130); 


$pdf->Output('Envio','I');

?>