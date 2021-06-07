<?php
include_once("../model/classdatos.php");

                $cliente=new envio();
                $dt2=$cliente->Verclientes();
                
                $receptor = new envio();
                $dt3 = $receptor->VerReceptor();
        
                $vehiculo = new envio();
                $dt4 = $vehiculo->VerVehiculo();
        
                $pilotointerno = new envio();
                $dt5 = $pilotointerno->Verpilotointerno();
        
                $plataforma = new envio();
                $dt6 = $plataforma->VerPlataforma();

                $asignado = new envio();
                $dt7 = $asignado->VerAsignado();
        if(isset($_GET['id'])and isset($_GET['Autorizar'])){
                echo "autorizar";
                $id=$_GET['id'];
                $au=new envio();
                $au->Autorizar($id);
        }
        else{
                
        }

        
?>