<?php 
ob_start();
include ('../Configuracion/config.php');
class envio
{

	public function Verpaquete()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_paquete(0, '0', '0', '0', '0', 0, 'S', @id_respuesta, @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}

	public function Verclientes()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_cliente(0, '0', '0', '0', '0', '0', '0', '0', '0', 'S', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}

	public function Verpilotointerno()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_pilotos(0, '0', '0', '0', '00', '0', '0', '0', '0', '0', '0', '00', '00', '0', '0', '0', 'S', @pn_respuesta);";
		$dt5= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt5;

	}


	public function VerReceptor()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_receptor(0, 'S', '0', '0', '0', '0', @pn_respuesta);";
		$dt3= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt3;

	}

	
	public function VerVehiculo()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_vehiculos(0, '0', '0', '0', '0', '0', '0', 0, '0', 0, '0', '0', '0', 'S', @pn_respuesta, @pn_id_vehiculo);";
		$dt4= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt4;
	}

	/*public function Verpiloto()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_pilotos(0, '0', '0', '0', '00', '0', '0', '0', '0', '0', '0', '00', '00', '0', '0', '0', 'S', @pn_respuesta);";
		$dt7= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt7;

	}*/

	public function VerPlataforma()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_plataforma(0, '0', '0', '0', '0', '0', '0', 'S', '0', '0', 0, @pn_respuesta, @pn_id);";
		$dt6= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt6;
	}

	public function VerAsignado()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "select a.id_asignacion_vehiculo, a.fecha_asignacion, a.observacion, a.id_empleado, concat(e.nombre,' ',e.apellido) as nombre, a.id_vehiculo, v.tipo_vehiculo, a.id_plataforma from asignacion_vehiculo_empleado as a inner join empleado as e on a.id_empleado=e.id_empleado
			inner join vehiculo as v on a.id_vehiculo=v.id_vehiculo where a.estado_eliminado=1;";
		$dt7= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt7;
	}

}