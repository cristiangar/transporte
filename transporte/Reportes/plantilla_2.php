<?php 
include_once('../fpdf/fpdf.php');
/**
 * 
 */
class pdf extends fpdf
{
	
	function Header()
	{
		//$this->Image('',5,5,40);
		$this->SetFont('Arial','B',20);
		$this->SetY(10);
		$this->Cell(30);
		$this->Cell(120,10,'Signacion de vehiclo y piloto',0,0,'C');
		$this->Ln(20);
	}

}
 ?>