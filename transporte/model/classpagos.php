<?php 
ob_start();
include ('../Configuracion/config.php');
class pagos
{

        public function IngresarEncabezado($cantidad,$id,$descripcion)
    {
        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_detalle(0, '$descripcion', $cantidad, $id, 'I', @pn_respuesta);";
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

            public function VerUnDetalle($id)
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_detalle($id, '0', 0, 0, 'S1', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

            public function VerCuentasPorPagar()
    {

        $db = new datos();
        $db->conectar();
        $consulta= "call sp_cuentas_por_pagar(0, 0, 0, 'S', @pn_respuesta);";
        $dt= mysqli_query($db->objetoconexion,$consulta);
        $db->desconectar();
        return $dt;

    }

                public function Eliminar($id,$ide)
    {

        $bd = new datos();
        $bd->conectar();
        $consulta= "call sp_detalle($id, '0', 0, $ide, 'D', @pn_respuesta);";
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