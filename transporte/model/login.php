<?php
    if (isset ($_POST['usr']))
    {
        if ($_POST['usr']=="chofer"){
            header("Location: ../views/pchofer.php");
            die();
        }
        else{
            if ($_POST['usr']=="secretaria"){
                header("Location: ../views/secritaria.php");
                die();
            }
            else{
                header("Location: ../views/usuarios.php");
                die();
            }
        }
    }
    else{
        echo "no hay usuario";
    }
?>