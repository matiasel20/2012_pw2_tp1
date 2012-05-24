<?php

include("../conectar.php");
extract($_POST);
session_start();



$pdo=conectar();

if( ( !empty($codigo) && !empty($descripcion) && !empty($modelo) &&
    !empty($tamanio) && !empty($precio) && !empty($stock) &&
    !empty($categoriaid) )
    

){
if     (
    is_numeric($codigo) && is_string($descripcion) && is_string($modelo)
     && is_string($tamanio) && is_numeric($precio) && is_string($stock)
     && is_numeric($categoriaid) 
	){
 try {
    $pdo->beginTransaction();
    $sql="update producto set codigo= :codigo, descripcion= :descripcion,
      modelo= :modelo, tamanio= :tamanio, precio= :precio, stock=:stock,
      categoriaid= :categoriaid where idproducto= :id"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam(':id', $_SESSION['identifikador']);

       $stmt->bindParam(':codigo', $codigo);
       $stmt->bindParam(':descripcion',$descripcion);
       $stmt->bindParam(':modelo', $modelo);
       $stmt->bindParam(':tamanio',$tamanio);
       $stmt->bindParam(':precio',$precio);
       $stmt->bindParam(':stock',$stock);
       $stmt->bindParam(':categoriaid',$categoriaid);  
       $stmt->execute();

       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”
  //echo "<h1>Se han guardado los cambios!</h1>";
  //echo "se ha borrado el id ".$id;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}
header('Location: ../../Administracion.php');

}else{ echo "error, en tipo de dato no valido";}

}else{
	echo "error, un campo esta vacio";
	}
?>

