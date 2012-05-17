<?php
include("../conectar.php");
extract($_POST);
//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="INSERT INTO compra (cantidad,fecha,clienteid,productoid)
      VALUES (:cantidad,:fecha,:clienteid,:productoid)"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':cantidad', $cantidad);
       $stmt->bindParam(':fecha',$fecha);
       $stmt->bindParam(':clienteid',$clienteid);
       $stmt->bindParam(':productoid',$productoid);

       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     header('Location: ../../administracion.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();

}

?>


