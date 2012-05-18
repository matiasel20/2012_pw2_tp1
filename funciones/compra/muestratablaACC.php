<?php
	
	function mostrarACC($categoria){
	
//	include("funciones/conectar.php");

//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from producto where categoriaid=:cat"; 
     $stmt = $pdo->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->bindParam(':cat', $categoria);
       
       $stmt->execute();
       $results2 = $stmt->fetchAll();

   
     
  $pdo->commit();  //se guardaría todo “definitivamente”
       return $results2;
  //echo $nombre.$apellido.$password;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}




 };
?>

 

