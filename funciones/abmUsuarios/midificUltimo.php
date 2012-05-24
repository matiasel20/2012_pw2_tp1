<?php

include("../conectar.php");
extract($_POST);
session_start();



$pdo=conectar();
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

       
    $sql="update cliente set 
      user= :user,  nombre= :nombre ,apellido= :apellido,  dni= :dni,  
      fechanac= :fechanac,  direccion= :direccion,  localidad= :localidad,
      telcel= :telcel,email= :email,  password= :password  where idcliente=:id";
      
     $stmt = $pdo->prepare($sql);
                 $stmt->bindParam(':id',  $_SESSION['identifikador']);
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
  //echo "<h1>Se han guardado los cambios!</h1>";
  //echo "se ha borrado el id ".$id;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}
header('Location: ../../Administracion.php');

}else{
	echo "ingresaste algo mal";}
?>

