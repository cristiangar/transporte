<?php 
ob_start();
include ('../Configuracion/config.php');
class Piloto
{

	public function Ingresar($nombre, $apellido, $dpi, $telefono, $whatsApp, $licencia, $tlicencia, $pasaporte, $ruta_licencia, $ruta_pasaporte, $ruta,$id_tipo_empleado, $cuenta, $correo, $banco, $nombre_emergencia, $numero_emergencia)
	{
        $bd = new datos();
		$bd->conectar();
		$consulta= "call sp_pilotos(0, '$nombre', '$apellido', '$dpi', '$telefono', '$whatsApp', '$licencia', '$tlicencia', '$pasaporte', '$ruta_licencia', '$ruta_pasaporte', '$ruta', 'Disponible',$id_tipo_empleado, '$cuenta', '$correo', '$banco', '$nombre_emergencia', '$numero_emergencia', 'I', @pn_respuesta);";
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
		$consulta= "call sp_pilotos(0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 'S', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
	public function VerUno($id)
	{
		$db = new datos();
		$db->conectar();
		$consulta= "call sp_pilotos($id, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 'S1', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}
	public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_pilotos($id, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 'D', @pn_respuesta);";
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

    public function Modificar($id,$nombre, $apellido, $dpi, $telefono, $whatsApp, $licencia, $tlicencia, $pasaporte, $ruta_licencia, $ruta_pasaporte, $ruta,$id_tipo_empleado, $cuenta, $correo, $banco, $nombre_emergencia, $numero_emergencia)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_pilotos($id, '$nombre', '$apellido', '$dpi', '$telefono', '$whatsApp', '$licencia', '$tlicencia', '$pasaporte', '$ruta_licencia', '$ruta_pasaporte', '$ruta', 'Disponible',$id_tipo_empleado, '$cuenta', '$correo', '$banco', '$nombre_emergencia', '$numero_emergencia', 'U', @pn_respuesta);";
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
	
	public function tipo()
    {
        $db = new datos();
		$db->conectar();
		$consulta= "SELECT *FROM tipo_empleado;";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
    }
	
}

 ?>