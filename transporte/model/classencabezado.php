<?php 
ob_start();
include ('../Configuracion/config.php');
class encabezado
{

        public function IngresarAbono($cantidad,$id)
    {
        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_abonos(0, $cantidad, $id, 'I', @pn_respuesta);";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();

        $res=mysqli_fetch_array($consultar);
        //
        $texto=$res['@pn_respuesta'];
        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/cuentas.php" </script>';


    }

        public function VerEncabezado()
    {

        $db = new datos();
        $db->conectar();
        $consulta= " select a.id_encabezado, e.codigo_envio,a.total,c.saldo, c.fecha_inicio, a.estado_factura,concat(b.nombre,' ',b.apellido) as cliente,a.id_cliente,c.id_cxc from encabezado as a 
            inner join clientes as b on a.id_cliente=b.id_cliente 
            inner join cxc as c on a.id_encabezado=c.id_encabezado 
            inner join detalle as d on a.id_encabezado=d.id_encabezado 
            inner join solicitud_envio as e on d.id_envio=e.id_envio
            where a.estado_eliminado=1;";
            /*and a.estado_factura='Pendiente'*/
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }
            public function VerUnaCuenta($id)
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_abonos(0, 0, $id, 'S2', @pn_respuesta);";
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

                public function Eliminar($id,$cxc)
    {

        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_abonos($id, 0, $cxc, 'D', @pn_respuesta);";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();


        $res=mysqli_fetch_array($consultar);
        //
        $texto=$res['@pn_respuesta'];

        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/cuentas.php" </script>';   

    }

                

    /*  public function ModificarCuenta($id,$nombre,$apellido,$telefono,$telefono2,$correo,$nit,$cuenta,$banco)
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


    }*/

    
}

 ?>