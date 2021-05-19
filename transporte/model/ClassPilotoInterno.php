<?php 
ob_start();
include ('../Configuracion/config.php');
class Piloto
{

	public function Ingresar($nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$ruta,$licencia,$tlicencia,$ruta_licencia,$pasaporte,$ruta_pasaporte,$caat,$ruta_caat)
	{
        $bd = new datos();
		$bd->conectar();
		$consulta= "call sp_pilotos(0, '$nombre', '$apellido', '$dpi', '$telefono', '$telefono2', '$licencia', '$tlicencia', '$pasaporte', '$ruta_licencia', '$ruta_pasaporte', '$ruta', '$ruta_caat', 'Disponible', '$caat', '$correo', 'I', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/choferes.php" </script>';


	}

	public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_pilotos(0, '0', '0', '0', '00', '0', '0', '0', '0', '0', '0', '00', '00', '0', '0', '0', 'S', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
	public function VerUno($id)
	{
		$db = new datos();
		$db->conectar();
		$consulta= "call sp_ruta($id, 'n', 'n', 'no','S1', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}
	public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_ruta($id, 'n', 'n', 'no','D', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/Rutas.php" </script>';

	}

    public function Modificar($id,$origen,$destino,$cond)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_ruta($id, '$origen', '$destino','$cond', 'U', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/Rutas.php" </script>';


	}

    public function VerDetalle($id)
    {

    }

	
}

 ?>