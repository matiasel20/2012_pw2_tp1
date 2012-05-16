<?php
include("../conectar.php");
extract($_POST);
//session_start();
$pdo=conectar();


 try {
    $pdo->beginTransaction();
    $sql="INSERT INTO producto (codigo, descripcion, modelo, tamanio, precio, stock)
      VALUES (:codigo, :descripcion, :modelo, :tamanio, :precio, :stock)"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':codigo', $codigo);
       $stmt->bindParam(':descripcion',$descripcion);
       $stmt->bindParam(':modelo',$modelo);
       $stmt->bindParam(':tamanio',$tamanio);
       $stmt->bindParam(':precio',$precio);
       $stmt->bindParam(':stock',$stock);
       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     header('Location: ../../administracion.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();

}

?>
