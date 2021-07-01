<?php

include_once('plantilla.php');
include_once('../model/classEnvio.php');
$id=$_GET['id'];

$detalle = new Envio();
$dt2=$detalle->ReporteDetalle($id);
$dt=$detalle->Reporte_encavezado($id);

while ($row = mysqli_fetch_array($dt))
    {
      $nombre=$row['nombre'];
      $nit=$row['nit'];
      $total=$row['total'];
      $fecha=$row['fecha'];
    }
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',18);
$pdf->SetX(35);
$pdf->cell(40,10,'Fecha:',0,1,'L');
$pdf->SetX(35);
$pdf->cell(40,10,'Nombre:',0,1,'L');
$pdf->SetX(35);
$pdf->cell(40,10,'Nit:',0,1,'L');

$pdf->SetFont('Arial','',18);
$pdf->Sety(40);
$pdf->SetX(75);
$pdf->cell(40,10,$fecha,0,1,'L');
$pdf->Sety(50);
$pdf->SetX(75);
$pdf->cell(40,10,$nombre,0,1,'L');
$pdf->Sety(60);
$pdf->SetX(75);
$pdf->cell(40,10,$nit,0,1,'L');

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',18);
$pdf->SetY(80);
$pdf->SetX(35);
$pdf->Cell(80,10,'Descripcion',1,0,'L',1);
$pdf->Cell(40,10,'Subtotal',1,0,'L',1);

$pdf->SetFont('Arial','',15);
$pdf->SetY(90);

while ($row = mysqli_fetch_array($dt2))
    {
        $pdf->SetX(35);
        $pdf->cell(80,10,utf8_decode($row['descripcion']),1,0,'L',1);
        $pdf->Cell(40,10,$row['subtotal'],1,1,'L',1);  

    }

    $pdf->SetX(115);
    $pdf->Cell(40,10,'Total: '.$total,1,0,'L',1);
    $pdf->Output();

?>