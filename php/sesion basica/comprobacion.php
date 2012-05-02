<?php

include("conectar.php");
include("consultalogin.php");
session_start();
$pdo=conectar();

if ($_POST['usuario'] !="" AND $_POST['pass'] !=""){    
   
    
    if(!consultalogin($pdo))
        $_SESSION['error']="login incorrecto";
    else
        $_SESSION['usuario']=$_POST['usuario'];    

}
else {
    $_SESSION['reingrese']="ingrese los datos";
}
header("location:index.php");

?>
