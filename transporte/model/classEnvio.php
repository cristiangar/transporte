<?php 
ob_start();
session_start();
include ('../Configuracion/config.php');
class Envio
{
	public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_envio(0, 'S', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
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
}