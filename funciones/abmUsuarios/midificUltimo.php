<?php

include("funciones/conectar.php");
extract($_POST);
session_start();



$pdo=conectar();

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
       $stmt->bindParam(':password', $password);
       $stmt->execute();

       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”
  //echo "<h1>Se han guardado los cambios!</h1>";
  //echo "se ha borrado el id ".$id;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}
header('Location: formularioABM.php');
?>

