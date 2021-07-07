<?php
include_once('plantilla.php');
include_once('../model/classreportes.php');
if(isset($_GET['cliente'])){
    $finicio=$_POST['finicio'];
    $ffinal=$_POST['ffinal'];
    
    $reporte = new reportes();
    $dt=$reporte->clientes_general($finicio,$ffinal);

    $pdf=new PDF('L');
    $pdf->AddPage();
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetY(40);
    $pdf->SetX(10);
    $pdf->Cell(30,5,'Codigo envio',1,0,'L',1);
    $pdf->Cell(30,5,'fecha envio',1,0,'L',1);
    $pdf->Cell(30,5,'fecha entrega',1,0,'L',1);
    $pdf->Cell(30,5,'cliente',1,0,'L',1);
    $pdf->Cell(30,5,'receptor',1,0,'L',1);
    $pdf->Cell(30,5,'estado factura',1,0,'L',1);
    $pdf->Cell(30,5,'total',1,0,'L',1);
    $pdf->Cell(30,5,'saldo',1,0,'L',1);
    $pdf->Cell(30,5,'abono',1,0,'L',1);

    $pdf->SetFont('Arial','',12);
    $pdf->SetY(50);

    while ($row = mysqli_fetch_array($dt))
    {
        $pdf->SetX(35);
        $pdf->cell(30,5,utf8_decode($row['codigo_envio']),1,0,'L',1);
        $pdf->Cell(30,5,$row['fecha_envios'],1,1,'L',1);  
    }
    $pdf->SetX(115);

    $pdf->Output();
}
?>