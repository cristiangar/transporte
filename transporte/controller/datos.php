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
        


?>