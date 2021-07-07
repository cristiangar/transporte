<?php 
ob_start();
include ('../Configuracion/config.php');
class reportes
{


	public function clientes_general($finicio,$ffinal)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_reportes_fechas('$finicio', '$ffinal', 'S');";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}


				


	
}

 ?>