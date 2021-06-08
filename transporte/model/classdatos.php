<?php 
ob_start();
session_start();
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

	public function VerEnvio()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_envio(0, 'S', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
		$dt8= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt8;

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




public function Ingresar($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$tercero)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_envio(0, 'I', '$descripcion', '$peso', '$direccion_entrega', '$direccion_envio', $ruta, '$fecha_envio', '$fecha_entrega', $id_cliente, $id_receptor, '$codigo_envio', 1, $tercero, @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		unset($_SESSION['idcliente']);
		unset($_SESSION['idreceptor']);
		unset($_SESSION['idasignacion']);

		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/estados.php" </script>';


	}
public function Ingresar2($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$piloto,$cabezal,$plataforma)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_envio2(0, 'I', '$descripcion', '$peso', '$direccion_entrega', '$direccion_envio', $ruta, '$fecha_envio', '$fecha_entrega', $id_cliente, $id_receptor, '$codigo_envio', 1, $piloto, $cabezal, $plataforma, @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);


		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/estados.php" </script>';
						unset($_SESSION['idcliente']);
						unset($_SESSION['idreceptor']);
						unset($_SESSION['idpiloto']);
						unset($_SESSION['idvehiculo']);
						unset($_SESSION['idplataforma']);


	}

	public function Ingresar3($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$piloto,$cabezal)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_envio2(0, 'I', '$descripcion', '$peso', '$direccion_entrega', '$direccion_envio', $ruta, '$fecha_envio', '$fecha_entrega', $id_cliente, $id_receptor, '$codigo_envio', 1, $piloto, $cabezal,0, @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		unset($_SESSION['idcliente']);
		unset($_SESSION['idreceptor']);
		unset($_SESSION['idpiloto']);
		unset($_SESSION['idvehiculo']);
		//
		$texto=$res['@pn_respuesta'];
		echo $texto;
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/estados.php" </script>';


	}
	public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_envio(0, 'S', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
		$dt4= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}

	public function VerUno($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_envio($id, 'S1', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}

	public function Autorizar($id)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_envio($id, 'A', '0', '0', '0', '0', 0, '0', '0', 0, 0, '0', 0, 0, @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);


		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/estados.php" </script>';


	}

	public function Eliminar($id)
	{
		
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_envio2($id, 'D', '1', '1', '1', '1', 1, '1', '1', 1, 1, '1', 1, 1, 1, 1, @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/estados.php" </script>';
	}
	public function Tipo_ruta()
    {
        $db = new datos();
		$db->conectar();
		$consulta= "call sp_ruta(0, 'n', 'n', 'no','S2', @pn_respuesta);";
		$dtruta= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dtruta;
    }
}