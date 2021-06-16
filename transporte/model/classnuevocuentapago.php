<?php 
ob_start();
session_start();
include ('../Configuracion/config.php');
class cuentapago
{

        public function IngresarEncabezado2($total,$anticipo,$id_envio, $id_cliente)
    {
        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_encabezado(0, $id_cliente, $id_envio, $anticipo, $total, 'Pendiente', 'I', '1', @pn_respuesta);";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();

        $res=mysqli_fetch_array($consultar);

        unset($_SESSION['id_cliente']);
        unset($_SESSION['id_envio']);
        //
        $texto=$res['@pn_respuesta'];
        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/encabezado.php" </script>';


    }

        
            public function VerUnDetalle($id)
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_detalle($id, '0', 0, 0, 'S1', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

           public function VerPilotoExterno()
    {

        $db = new datos();
        $db->conectar();
        $consulta= "    select a.id_tipo_empleado,a.id_empleado, concat(a.nombre,' ',a.apellido)as nombre,a.dpi,a.telefono1,a.telefono2,a.licencia,a.tipo_licencia,a.pasaporte,a.ruta_imagen_licencia,a.ruta_imagen_pasaporte,a.ruta_imagen_caat,a.ruta_imagen_dpi,a.ruta_imagen_dpi,a.estado_piloto,b.cargo,codigo_caat,a.correo, d.nombre as rol from empleado as a
    inner join tipo_empleado as b on b.id_tipo_empleado=a.id_tipo_empleado
    inner join usuario as c on c.id_empleado=a.id_empleado
    inner join rol_usuario as d on d.id_rol_usuario=c.id_rol_usuario
    where (a.estado_eliminado=1) and (d.nombre='Piloto' or d.nombre='piloto') and (b.cargo='Externo' or b.cargo='externo');";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

                public function Eliminar($id)
    {

        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_encabezado($id, 0, 0, 0, 0, '0', 'D', '0', @pn_respuesta);";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();


        $res=mysqli_fetch_array($consultar);
        //
        $texto=$res['@pn_respuesta'];

        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/encabezado.php" </script>';   

    }

                

        public function ModificarDetalle($id,$id2,$descripcion,$subtotal)
    {
        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_detalle($id2, '$descripcion', $subtotal, $id, 'U', @pn_respuesta);";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();

        $res=mysqli_fetch_array($consultar);
        //
        $texto=$res['@pn_respuesta'];
        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/encabezado.php" </script>';


    }

    
}

 ?>