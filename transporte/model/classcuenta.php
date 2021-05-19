<?php 
ob_start();
include ('../Configuracion/config.php');
class cuenta
{

		public function IngresarCuenta($nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco)
	{
		$bd = new datos();
		$bd->conectar();
		$consulta= "call sp_cliente(0, '$nombre', '$apellido', '$telefono', '$telefono2', '$correo', '$nit', '$cuenta', '$banco', 'I', @pn_respuesta);";
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

		public function VerCuentas()
	{

		$db = new datos();
		$db->conectar();
		$consulta= " select a.id_encabezado, a.total,c.saldo, c.fecha_inicio, a.estado_factura,concat(b.nombre,' ',b.apellido) as cliente,a.id_cliente,c.id_cxc from encabezado as a
			inner join clientes as b on a.id_cliente=b.id_cliente inner join cxc as c on a.id_encabezado=c.id_encabezado
    		where a.estado_eliminado=1 and a.estado_factura='Pendiente';";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}
			public function VerUnaCuenta($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_cliente($id, '0', '0', '0', '0', '0', '0', '0', '0', 'S1', @pn_respuesta);";
		$dt= mysqli_query($db->objetoconexion,$consulta);
		$db->desconectar();
		return $dt;

	}

			public function VerUnCliente($id)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_abonos(0, 0, $id, 'S2', @pn_respuesta);";
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

				

		public function ModificarCuenta($id,$nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco)
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

	
}

 ?>