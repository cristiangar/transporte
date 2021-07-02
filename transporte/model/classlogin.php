<?php
ob_start();
include ('../Configuracion/config.php');
class login
{
	public function Ver($us,$pas)
	{

		$db = new datos();
		$db->conectar();
		$consulta= "call sp_login('$us','$pas', @pn_rol, @pn_id, @pn_usuario);";
		$dt= mysqli_query($db->objetoconexion,$consulta);

        $salida="SELECT @pn_usuario";
        $consultar=mysqli_query($db->objetoconexion,$salida);
		$db->desconectar();
        $res=mysqli_fetch_array($consultar);
        $texto=$res['@pn_usuario'];
        if($texto=="ERROR")
        {
         header("Location: ../Index.php?error");
        }
        else{
            echo "aceptado";
        }

	}	
}
?>