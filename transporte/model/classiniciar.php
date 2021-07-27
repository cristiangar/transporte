<?php 
ob_start();
//session_start();
include ('../Configuracion/config.php');
class Iniciar
{
	public function Ver()
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_estados_del_viaje(0, 'S', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}


    public function iniciar($id)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_estados_del_viaje($id, 'I', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/secritaria.php" </script>';

	}
    public function terminar($id)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_estados_del_viaje($id, 'T', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		//
		$texto=$res['@pn_respuesta'];
		echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/secritaria.php" </script>';

	}

}