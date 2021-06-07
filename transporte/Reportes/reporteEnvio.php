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
    $dpaquete=$row['dpaquete'];
    if(($tipo_vehivulo=="Cabezal") or ($tipo_vehivulo=="cabezal")){
      $placa_plataforma=$row['placa'];
      $tipo_plataforma=$row['tipo'];
      $color_plataforma=$row['color'];
      $tamanio_plataforma=$row['tamaño'];
      $descripcion_plataforma=$row['dplataforma'];
      $tplataforma=$row['tplataforma'];

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
$pdf->Sety(60);
$pdf->SetX(51);
$pdf->cell(40,10,$cliente,0,1,'L');
$pdf->Sety(70);
$pdf->SetX(51);
$pdf->cell(40,10,$tel_cliente,0,1,'L');
$pdf->Sety(80);
$pdf->SetX(51);
$pdf->cell(40,10,$receptor,0,1,'L');
$pdf->Sety(90);
$pdf->SetX(51);
$pdf->cell(40,10,$tel_receptor,0,1,'L');




$pdf->Sety(50);
$pdf->SetX(100);
$pdf->MultiCell(75,10,'Datos del Envio',0,'C',1);
$pdf->Sety(60);
$pdf->SetX(100);
$pdf->cell(40,10,'Codigo de envio:',0,1,'L');
$pdf->Sety(70);
$pdf->SetX(100);
$pdf->cell(40,10,'Fecha de envio:',0,1,'L');
$pdf->Sety(80);
$pdf->SetX(100);
$pdf->cell(40,10,'Fecha de entrega:',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Sety(60);
$pdf->SetX(140);
$pdf->cell(40,10,$codigo_envio,0,1,'L');
$pdf->Sety(70);
$pdf->SetX(140);
$pdf->cell(40,10,$fenvio,0,1,'L');
$pdf->Sety(80);
$pdf->SetX(140);
$pdf->cell(40,10,$fentrega,0,1,'L');





    
$pdf->Output();

?>