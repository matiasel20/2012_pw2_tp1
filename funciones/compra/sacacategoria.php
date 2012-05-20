<?php
	require_once("funciones/conectar.php");

function sacacat(){


//session_start();


$pdo=conectar();
 try {
    $pdo->beginTransaction();
    $sql="select * from categoria"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
 

       
       $stmt->execute();
              $results = $stmt->fetchAll();
       
   
     
  $pdo->commit(); 
return $results;
   //se guardaría todo “definitivamente”
  //echo "<h1>Se han guardado los cambios!</h1>";
  //echo "se ha borrado el id ".$id;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}

}
 
?>
     
