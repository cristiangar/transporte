<?php 
ob_start();
include ('../Configuracion/config.php');
class Cabezal
{

		public function Ingresar($ptamaño,$pcolor,$pejes,$ppeso,$ptipo,$pplaca,$pimagen,$otro,$propiedad)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_plataforma(0, '$ptamaño', '$pcolor', '$pejes', '$ppeso', '$ptipo', '$pplaca', 'I', '$pimagen', '$otro',$propiedad, @pn_respuesta, @pn_id);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/vehiculos.php?P" </script>';


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
		$consulta= "call sp_plataforma($id, '0', '0', '0', '0', '0', '0', 'S1', '0', '0', 0, @pn_respuesta, @pn_id);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
				public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_plataforma($id, '0', '0', '0', '0', '0', '0', 'D', '0', '0', 0, @pn_respuesta, @pn_id);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/vehiculos.php?P" </script>';

	}

				

		public function Modificar($id,$ptamaño,$pcolor,$pejes,$ppeso,$ptipo,$pplaca,$pimagen,$otro,$propiedad)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta="call sp_plataforma($id, '$ptamaño', '$pcolor', '$pejes', '$ppeso', '$ptipo', '$pplaca', 'U', '$pimagen', '$otro',$propiedad, @pn_respuesta, @pn_id);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/vehiculos.php?P" </script>';


	}

	
}

 ?>