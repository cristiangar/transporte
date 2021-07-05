<?php 
ob_start();
include ('../Configuracion/config.php');
class Personal
{

		public function IngresarPersonal($id_tipo_empleado,$nombre,$apellido,$dpi,$telefono,$telefono2,$correo)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_empleado(0, $id_tipo_empleado, '$nombre', '$apellido', '$dpi', '$telefono', '$telefono2', '$correo', 'I', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/personal.php" </script>';


	}

		public function VerPersonal()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_empleado(0, 0, '0', '0', '0', '0', '0', '0', 'S', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
			public function VerUnPersonal($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_empleado($id, 0, '0', '0', '0', '0', '0', '0', 'S1', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
				public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_empleado($id, 0, '0', '0', '0', '0', '0', '0', 'D', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/personal.php" </script>';

	}

				

		public function ModificarPersonal($id,$nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$id_tipo_empleado)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_empleado($id, $id_tipo_empleado, '$nombre', '$apellido', '$dpi', '$telefono', '$telefono2', '$correo', 'U', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/personal.php" </script>';


	}

	public function Tipo_empleado()
    {
        $db = new datos();
		$db->conectar();
		$consulta= "call ps_rol_usuario(0, 'n', 'S2', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
    }
}

 ?>