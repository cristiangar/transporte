<?php 
ob_start();
session_start();
include ('../Configuracion/config.php');
class PilotoTercero
{

	public function Ingresar($nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$ruta,$licencia,$tlicencia,$ruta_licencia,$pasaporte,$ruta_pasaporte,$caat,$ruta_caat)
	{
        $bd = new datos();
		$bd->conectar();
		$consulta= "call sp_piloto_tercero(0, '$nombre', '$apellido', '$dpi', '$telefono', '$telefono2', '$licencia', '$tlicencia', '$pasaporte', '$ruta_licencia', '$ruta_pasaporte', '$ruta', '$ruta_caat', 'Disponible', '$caat', '$correo', 'I', @pn_respuesta, @pn_ultimoid);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$id="SELECT @pn_ultimoid";/*ultimo id insertado en empleado*/ 
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		$consultar2=mysqli_query($bd->objetoconexion,$id);/*consulta para recuperar el ultimo id de empleado en el procedimiento*/
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		$ultimoid=mysqli_fetch_array($consultar2);/** capturo en variable el id */
		
		$_SESSION['idTercero']=$ultimoid['@pn_ultimoid'];
		//
		$texto=$res['@pn_respuesta'];
		/*echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/choferes.php" </script>';*/

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
		$consulta= "call sp_pilotos(1, 'n', 'n', 'n', 'nn', 'n', 'n', 'nn', 'n', 'nn', 'n', 'n', 'n', 'n', 'n', 'n', 'S1', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
	}
	public function Eliminar($id)
	{

		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_piloto_tercero($id, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'Disponible', 'a', 'a', 'D', @pn_respuesta, @pn_ultimoid);";
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

    public function Modificar($id,$nombre,$apellido,$dpi,$telefono,$telefono2,$correo,$ruta,$licencia,$tlicencia,$ruta_licencia,$pasaporte,$ruta_pasaporte,$caat,$ruta_caat)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_pilotos($id, '$nombre', '$apellido', '$dpi', '$telefono', '$telefono2', '$licencia', '$tlicencia', '$pasaporte', '$ruta_licencia', '$ruta_pasaporte', '$ruta', '$ruta_caat', 'Disponible', '$caat', '$correo', 'U', @pn_respuesta);";
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

    public function VerDetalle($id)
    {
        $db = new datos();
		$db->conectar();
		$consulta= "call sp_pilotos($id, '0', '0', '0', '00', '0', '0', '0', '0', '0', '0', '00', '00', '0', '0', '0', 'S1', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;
    }

	public function functionIngrearVehiculo($marca,$modelo,$tonelaje,$ruta_tarjeta,$placa,$descripcion,$tipo,$tamaño,$ejes,$color)
	{
		
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_vehiculos(0, '$marca', '$modelo', '$tonelaje', '$ruta_tarjeta', '$placa', '$descripcion', 1, '$tipo', 1, '$tamaño', '$ejes', '$color', 'I', @pn_respuesta,@pn_id_vehiculo);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);

		$idv="SELECT @pn_id_vehiculo";
		$consultar3=mysqli_query($bd->objetoconexion,$idv);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		$texto=$res['@pn_respuesta'];	

		$res1=mysqli_fetch_array($consultar3);
		$_SESSION['idvehiculo']=$res1['@pn_id_vehiculo'];
	
	}

	public function IngrearPlataforma($ptamaño,$pcolor,$pejes,$ppeso,$ptipo,$pplaca,$pimagen,$otro)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call transporte.sp_plataforma(0, '$ptamaño', '$pcolor', '$pejes', '$ppeso', '$ptipo', '$pplaca', 'I', '$pimagen', '$otro', @pn_respuesta, @pn_id);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);

		$pn_id="SELECT  @pn_id";
		$consulta4=mysqli_query($bd->objetoconexion,$pn_id);/*llama al out del procedimiento que tien el id*/ 
		
		$bd->desconectar();
		
		$resplataforma=mysqli_fetch_array($consulta4);
		$_SESSION['idplataforma']=$resplataforma['@pn_id'];

		$res=mysqli_fetch_array($consultar);
		$texto=$res['@pn_respuesta'];
	
				/*echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/choferes.php" </script>';*/
		
	}

	public function asiganacion()
	{
		$bandera2='1';
		$id_empleado=$_SESSION['idTercero'];
		$id_vehiculo=$_SESSION['idvehiculo'];
		$id_plataforma=$_SESSION['idplataforma'];
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_asiganacion_vehiculo_empleado(0, '$bandera2', 'I', $id_empleado, $id_vehiculo, $id_plataforma, 'N/A', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		$texto=$res['@pn_respuesta'];	
				echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/choferes.php" </script>';

	}

	public function asiganacion2()
	{
		$bandera2='0';
		$id_empleado=$_SESSION['idTercero'];
		$id_vehiculo=$_SESSION['idvehiculo'];
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_asiganacion_vehiculo_empleado(0, '$bandera2', 'I', $id_empleado, $id_vehiculo,4,'N/A', @pn_respuesta);";
		$dt= mysqli_query($bd->objetoconexion,$consulta);

		$salida="SELECT @pn_respuesta";
		$consultar=mysqli_query($bd->objetoconexion,$salida);
		
		$bd->desconectar();

		$res=mysqli_fetch_array($consultar);
		$texto=$res['@pn_respuesta'];	
				echo'<script language = javascript>
						alert("'.$texto.'")
						self.location="../views/choferes.php" </script>';

	}


	
}

 ?>