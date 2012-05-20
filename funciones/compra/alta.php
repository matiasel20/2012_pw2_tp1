<?php
include("../conectar.php");
extract($_GET);
//session_start();
$clienteid=2;
$cantidad=1;
$pdo=conectar();
$fecha2=sprintf('%s',date("Y/m/d H:i:s"));

 try {
    $pdo->beginTransaction();
    $sql="INSERT INTO compra (cantidad,fecha,clienteid,productoid)
      VALUES (:cantidad,:fecha,:clienteid,:productoid)
      "; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':cantidad', $cantidad);
       $stmt->bindParam(':fecha',$fecha2);
       $stmt->bindParam(':clienteid',$clienteid);
       $stmt->bindParam(':productoid',$prod);

       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     header('Location: ../../Compras.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();

}

?>


