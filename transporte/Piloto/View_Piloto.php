<?php
session_start();
if(isset($_SESSION['usuario']))
{
    $rol=$_SESSION['rol'];
    $us=$_SESSION['usuario'];
    
}/**usuario */
else{/**else de la session */
    header("location: ../Index.php");
}/**ses */
?>