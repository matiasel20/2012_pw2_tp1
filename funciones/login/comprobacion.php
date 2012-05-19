<?php

require_once ("../conectar.php");
include("consultalogin.php");
include("consultaloginempleado.php");


session_start();
$pdo=conectar();

if ($_POST['usuario'] !="" AND $_POST['pass'] !=""){    
   
    
    if(consultalogin($pdo))
        $_SESSION['usuario']=$_POST['usuario'];
	elseif (consultaloginempleado($pdo))
		$_SESSION['empleado']=$_POST['usuario'];
    else
        $_SESSION['error']="login incorrecto";;    

}
else {
    $_SESSION['reingrese']="ingrese los datos";
}
header("location:../../index.php");

?>
