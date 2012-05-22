<?php

require_once ("../conectar.php");
include("consultalogin.php");
include("consultaloginempleado.php");


session_start();
$pdo=conectar();

if ($_POST['usuario'] !="" AND $_POST['pass'] !=""){    
   
    
    if(consultalogin($pdo)){
        $_SESSION['usuario']=$_POST['usuario'];
        header("location:../../Index.php");
    }elseif (consultaloginempleado($pdo)){
		$_SESSION['empleado']=$_POST['usuario'];
                header("location:../../Index.php");
        }
    else{
        $_SESSION['error']="Login incorrecto";;    
        header("location:../../LogIn.php");
    }     
}
else {
    $_SESSION['reingrese']="ingrese los datos";
    header("location:../../LogIn.php");
}


?>
