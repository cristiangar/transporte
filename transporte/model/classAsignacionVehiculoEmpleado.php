<?php 
ob_start();
include ('../Configuracion/config.php');
class asignacion
{


		public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_asiganacion_vehiculo_empleado(0, '0', 'S', 0, 0, 0, '0', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
			public function VerUno($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_asiganacion_vehiculo_empleado($id, '0', 'S1', 0, 0, 0, '0', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
				public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_cliente($id, '0', '0', '0', '0', '0', '0', '0', '0', 'D', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/clientes.php" </script>';

	}

				


	
}

 ?>