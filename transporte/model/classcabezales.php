<?php 
ob_start();
include ('../Configuracion/config.php');
class Cabezal
{

		public function Ingresar($marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$propiedad,$tipo_vehiculo,$ejes,$color)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_vehiculos(0, '$marca', '$modelo', '$tonelaje', '$ruta_tarjeta', '$placa', '$descripcion', $propiedad, '$tipo_vehiculo', 1, 'N/A', '$ejes', '$color', 'I2', @pn_respuesta,@pn_id_vehiculo);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/vehiculos.php?C" </script>';


	}

		public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_vehiculos(0, '0', '0', '0', '0', '0', '0', 0, '0', 0, '0', '0', '0', 'S', @pn_respuesta, @pn_id_vehiculo);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
			public function VerUno($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_vehiculos($id, '0', '0', '0', '0', '0', '0', 0, '0', 0, '0', '0', '0', 'S1', @pn_respuesta, @pn_id_vehiculo);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
				public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_vehiculos($id, '0', '0', '0', '0', '0', '0', 0, '0', 0, '0', '0', '0', 'D', @pn_respuesta, @pn_id_vehiculo);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/vehiculos.php?C" </script>';

	}

				

		public function Modificar($id,$marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$propiedad,$tipo_vehiculo,$tamaño,$ejes,$color)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta="call sp_vehiculos($id, '$marca', '$modelo', '$tonelaje', '$ruta_tarjeta', '$placa', '$descripcion', $propiedad, '$tipo_vehiculo', 1, '$tamaño', '$ejes', '$color', 'U', @pn_respuesta,@pn_id_vehiculo);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo $texto;
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/vehiculos.php?C" </script>';


	}

	
}

 ?>