<?php 
include_once('../fpdf/fpdf.php');
/**
 * 
 */
class pdf extends fpdf
{
	
	function Header()
	{
		$this->Image('../imagenes/logoE2.jpeg',10,5,30);
		$this->SetFont('Arial','B',20);
		$this->SetY(10);
		$this->Cell(30);
		$this->Cell(120,10,'Asignacion de vehiclo y piloto',0,0,'C');
		$this->Ln(20);
	}

}
 ?>