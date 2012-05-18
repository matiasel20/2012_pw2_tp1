<?php
include("../conectar.php");
extract($_GET);
//session_start();
$pdo=conectar();

    try {
        $pdo->beginTransaction();
        $sql="delete from producto where idproducto = :identificador"; 
         $stmt = $pdo->prepare($sql);
          //$stmt->setFetchMode(PDO::FETCH_ASSOC);
           $stmt->bindParam(':identificador', $idX);


           $stmt->execute();



      $pdo->commit();  //se guardaría todo “definitivamente”

      header('Location: ../../administracion.php');
    } catch (PDOException $e) {
      $pdo->rollBack();  //ante cualquier excepción, revierte todo
       echo 'La operación ha fallado: ' . $e->getMessage();
    }


?>