<?php 
ob_start();
include ('../Configuracion/config.php');
class Receptor
{

		public function IngresarReceptor($nombre,$apellido,$telefono,$telefono2)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call trasportefinal.sp_receptor(0,'I', '$nombre', '$apellido', '$telefono', '$telefono2', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/receptor.php" </script>';


	}

		public function VerReceptor()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call trasportefinal.sp_receptor(0, 'S', '0', '0', '0', '0', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
			public function VerUnReceptor($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call trasportefinal.sp_receptor($id, 'S1', '0', '0', '0','0', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}
				public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call trasportefinal.sp_receptor($id, 'D', '0', '0', '0','0', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/receptor.php" </script>';

	}

				

		public function ModificarReceptor($id,$nombre,$apellido,$telefono,$telefono2)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_receptor($id,'U','$nombre', '$apellido', '$telefono', '$telefono2', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/receptor.php" </script>';


	}

	
}

 ?>