<?php 
ob_start();
//session_start();
include ('../Configuracion/config.php');
class Envio
{
	public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_envio(0, 'S3', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}
	public function VerAutorizar()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_envio(0, 'S2', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}

	public function Reporte_encavezado($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_Senvio('S', $id);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}
	public function ReporteDetalle($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_Senvio('S1',1);";
		$dt2= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt2;
	}
}