<?php 
ob_start();
include ('../Configuracion/config.php');
class pagos
{

        public function IngresarAbono($cantidad,$id,$descripcion)
    {
        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_abonos_cuentas_por_pagar(0, $cantidad, $id, '$descripcion', 'I', @pn_respuesta);";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();

        $res=mysqli_fetch_array($consultar);
        //
        $texto=$res['@pn_respuesta'];
        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/pagos.php" </script>';


    }

            public function VerUnAbono($id)
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_abonos_cuentas_por_pagar($id, 0, 0, 'S1', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

    public function VerAbonos($id)
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_abonos_cuentas_por_pagar(0, 0, $id, '0', 'S2', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

    public function VerEnviosPagos()
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_cuentas_por_pagar(0, 0, 0, 0, 'S4', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt2;

    }

            public function VerCuentasPorPagar()
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_cuentas_por_pagar(0, 0, 0, 0, 'S', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

                public function Eliminar($id,$ide)
    {

        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_abonos_cuentas_por_pagar($id, 0, $ide, '0', 'D', @pn_respuesta);;";
        $dt= mysqli_query($bd->objetoconexion,$consulta);

        $salida="SELECT @pn_respuesta";
        $consultar=mysqli_query($bd->objetoconexion,$salida);
        
        $bd->desconectar();


        $res=mysqli_fetch_array($consultar);
        //
        $texto=$res['@pn_respuesta'];

        echo'<script language = javascript>
                        alert("'.$texto.'")
                        self.location="../views/pagos.php" </script>';   

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