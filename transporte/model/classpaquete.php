<?php 
ob_start();
include ('../Configuracion/config.php');
class paquete
{

		public function Ingresarpaquete($peso,$direccione,$direccionenvi,$descripcion,$ruta)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_paquete(0, '$descripcion', '$peso', '$direccione', '$direccionenvi', '$ruta', 'I', @id_respuesta, @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salidaid="SELECT @id_respuesta";
		$consultar2=mysqli_query($bd->objetoconexion,$salidaid);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/paquete.php" </script>';


	}

		public function Verpaquete()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_paquete(0, '0', '0', '0', '0', 0, 'S', @id_respuesta, @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
			public function VerUnpaquete($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_paquete($id, '0', '0', '0', '0', 0, 'S1', @id_respuesta, @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
				public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_paquete($id, '0', '0', '0', '0', 0, 'D', @id_respuesta, @pn_respuesta);";
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

	public function Tipo_ruta()
    {
        $db = new datos();
		$db->conectar();
		$consulta= "call sp_ruta(0, 'n', 'n', 'no','S', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
    }

				

	/*	public function ModificarCliente($id,$nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_cliente($id, '$nombre', '$apellido', '$telefono', '$telefono2', '$correo', '$nit', '$cuenta', '$banco', 'U', @pn_respuesta);";
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
*/
	
}

 ?>