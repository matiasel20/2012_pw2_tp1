<?php
include("funciones/conectar.php");
extract($_POST);
//session_start();
$pdo=conectar();


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
       $stmt->bindParam(':password', $password);
       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     header('Location: formularioABM.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();

}

?>
