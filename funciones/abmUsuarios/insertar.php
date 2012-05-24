<?php
include("../conectar.php");
extract($_POST);
session_start();
$pdo=conectar();
//$fechanac=sprintf('%s',date("Y/m/d"));
$stamp = strtotime($fechanac);
if( ( !empty($user) && !empty($nombre) && !empty($apellido) &&
    !empty($dni) && !empty($fechanac) && !empty($direccion) &&
    !empty($localidad) && !empty($telcel) && !empty($email) &&
    !empty($password))
    &&
    (
    is_string($user) && is_string($nombre) && is_string($apellido) &&
    is_string($dni) && checkdate(date('m', $stamp), date('d', $stamp), date('Y', $stamp)) && is_string($direccion) &&
    is_string($localidad) && is_string($telcel) && is_string($email) &&
    is_string($password))
	
){

 try {
    $pdo->beginTransaction();
    $sql="INSERT INTO cliente 
      (user,  nombre ,apellido,  dni,  fechanac,  direccion,  localidad,  telcel,email,  password )
      VALUES 
      (:user,:nombre ,:apellido, :dni, :fechanac, :direccion, :localidad, :telcel,:email,:password )"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':user', $user);
       $stmt->bindParam(':nombre', $nombre);
       $stmt->bindParam(':apellido', $apellido);
       $stmt->bindParam(':dni', $dni);
       $stmt->bindParam(':fechanac', $fechanac);
       $stmt->bindParam(':direccion', $direccion);
       $stmt->bindParam(':localidad',$localidad);
       $stmt->bindParam(':telcel',$telcel);
       $stmt->bindParam(':email', $email);
       $stmt->bindParam(':password', md5($password));
       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     header('Location: ../../Administracion.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
   $_SESSION['errorinsertar']=true;
   header('Location: ../../Administracion.php');

}
}else{
	echo "error, ingresaste algo mal";
	$_SESSION['errorinsertar']=true;
    header('Location: ../../Administracion.php');
	}

?>
