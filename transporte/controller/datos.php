<?php

        include_once("../model/classdatos.php");
        $cliente=new envio();
        $dt2=$cliente->Verclientes();
        
        $receptor = new envio();
        $dt3 = $cliente->VerReceptor();

        


?>