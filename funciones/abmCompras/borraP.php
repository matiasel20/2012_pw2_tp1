<?php

include("../conectar.php");
extract($_POST);
//session_start();
$pdo=conectar();
echo 'entre a borrar';
 try {
     
    $pdo->beginTransaction();
    $sql="delete from producto where idproducto = :identificador"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
     
     if(isset ($_GET['idX'])){
       $stmt->bindParam(':identificador', $_GET['idX']);
       echo 'set='.$_GET['idX'];
        unset ($_GET['idX']);
     }else
       $stmt->bindParam(':identificador', $id);

       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

  header('Location: ../../administracion.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}




?>


