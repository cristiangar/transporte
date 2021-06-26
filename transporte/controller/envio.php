<?php
include_once("../model/classdatos.php");


if (isset($_GET['id']))
{
    
    if (isset($_GET['id']) and isset($_GET['es'])) {//valida si es modificar o eliminar
        $id=$_GET['id'];
        $au =new envio();
        $au->  Eliminar($id);
        /*ELIMINAR*/
        
    }
    else
    {
        if(isset($_GET['id']) and isset($_GET['mod'])){
                /*MODIFICAR*/
                if(isset($_POST ['cod']) and isset($_SESSION['idplataforma'])){
                    /*datos del envio*/
                    $codigo_envio=$_POST['cod'];
                    $fecha_envio=$_POST['fenvio'];
                    $fecha_entrega=$_POST['fentrega'];
                    
                    /*datos del cliente y receptor*/
                    $id_cliente=$_SESSION['idcliente'];
                    $id_receptor=$_SESSION['idreceptor'];
        
                    /*datos del paquete*/
                    $peso="N/A";
                    $direccion_entrega=$_POST['direccion'];
                    $direccion_envio=$_POST['direccionenvio'];
                    $ruta=$_POST['id_ruta'];
                    $descripcion=$_POST['descripcion'];
                    
                    /*datos del vehiculo*/
                    $cabezal=$_SESSION['idvehiculo'];
                    $piloto=$_SESSION['idpiloto'];
                    $plataforma=$_SESSION['idplataforma'];
                    //$envio=new envio();
                  
                  echo "cabezal con plataforma";  //$envio->Ingresar2($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$piloto,$cabezal,$plataforma);
            }
            else
            {
                    //echo "piloto y vehiculo sin plataforma";
                    /*datos del envio*/
                    $codigo_envio=$_POST['cod'];
                    $fecha_envio=$_POST['fenvio'];
                    $fecha_entrega=$_POST['fentrega'];
                    
                    /*datos del cliente y receptor*/
                    if(isset($_SESSION['idcliente'])){
                        $id_cliente=$_SESSION['idcliente'];
                    }
                    else{
                        $id_cliente=$_POST['id_cliente'];
                    
                    }

                    if(isset($_SESSION['idreceptor'])){
                        $id_receptor=$_SESSION['idreceptor'];
                    }
                    else{
                        $id_receptor=$_POST['id_receptor'];
                        
                    }

                  
        
                    /*datos del paquete*/
                    $id_paquete=$_POST['id_paquete'];
                    $peso="N/A";
                    $direccion_entrega=$_POST['direccion'];
                    $direccion_envio=$_POST['direccionenvio'];
                    $ruta=$_POST['id_ruta'];
                    $descripcion=$_POST['descripcion'];

                    /**id asignacion */
                    $asignacion=$_POST['id_asignacion'];
        
                    /*datos del vehiculo*/
                    if(isset($_SESSION['idvehiculo'])){
                        $cabezal=$_SESSION['idvehiculo'];
                    }
                    else{
                        $id_vehiculo=$_POST['id_vehiculo'];
                        
                    } 

                    if(isset($_SESSION['idpiloto'])){
                        $piloto=$_SESSION['idpiloto'];
                    }
                    else{
                        $id_piloto=$_POST['id_piloto'];

                    }
                   // $envio=new envio();
                    //$envio->Ingresar3($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$piloto,$cabezal);
                    
            }

        }
        else{
            $id = $_GET['id'];
            $detalle=new envio();
            $dt=$detalle->VerUno($id);
            /*VER UNO*/
        }

    }

}
else
{
    if(isset($_POST ['cod']) and isset($_SESSION['idplataforma'])){
            /*INSERTAR*/
            /*datos del envio*/
            $codigo_envio=$_POST['cod'];
            $fecha_envio=$_POST['fenvio'];
            $fecha_entrega=$_POST['fentrega'];
            
            /*datos del cliente y receptor*/
            $id_cliente=$_SESSION['idcliente'];
            $id_receptor=$_SESSION['idreceptor'];

            /*datos del paquete*/
            $peso="N/A";
            $direccion_entrega=$_POST['direccion'];
            $direccion_envio=$_POST['direccionenvio'];
            $ruta=$_POST['id_ruta'];
            $descripcion=$_POST['descripcion'];
            
            /*datos del vehiculo*/
            $cabezal=$_SESSION['idvehiculo'];
            $piloto=$_SESSION['idpiloto'];
            $plataforma=$_SESSION['idplataforma'];
            $envio=new envio();
            $envio->Ingresar2($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$piloto,$cabezal,$plataforma);
    }
    else
    {
            //echo "piloto y vehiculo sin plataforma";
            /*INSERTAR*/
            /*datos del envio*/
            $codigo_envio=$_POST['cod'];
            $fecha_envio=$_POST['fenvio'];
            $fecha_entrega=$_POST['fentrega'];
            
            /*datos del cliente y receptor*/
            $id_cliente=$_SESSION['idcliente'];
            $id_receptor=$_SESSION['idreceptor'];

            /*datos del paquete*/
            $peso="N/A";
            $direccion_entrega=$_POST['direccion'];
            $direccion_envio=$_POST['direccionenvio'];
            $ruta=$_POST['id_ruta'];
            $descripcion=$_POST['descripcion'];

            /*datos del vehiculo*/
            $cabezal=$_SESSION['idvehiculo'];
            $piloto=$_SESSION['idpiloto'];
            $envio=new envio();
            $envio->Ingresar3($descripcion, $peso, $direccion_entrega, $direccion_envio, $ruta, $fecha_envio,$fecha_entrega, $id_cliente, $id_receptor, $codigo_envio,$piloto,$cabezal);

    }

}

?>