<?php
include("../conectar.php");

session_start();
$pdo=conectar();
extract($_POST);

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
    $sql="INSERT INTO producto (codigo, descripcion, modelo, tamanio, precio, stock, categoriaid)
      VALUES (:codigo, :descripcion, :modelo, :tamanio, :precio, :stock, :categoriaid)"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':codigo', $codigo);
       $stmt->bindParam(':descripcion',$descripcion);
       $stmt->bindParam(':modelo',$modelo);
       $stmt->bindParam(':tamanio',$tamanio);
       $stmt->bindParam(':precio',$precio);
       $stmt->bindParam(':stock',$stock);
       $stmt->bindParam(':categoriaid',$categoriaid);       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     header('Location: ../../Administracion.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
   $_SESSION['errorinsertar']=true;
   header('Location: ../../Administracion.php');

}
}else{ 
echo "error, en tipo de dato no valido";
$_SESSION['errorinsertar']=true;
header('Location: ../../Administracion.php');

}

}else{
	echo "error, un campo esta vacio";
	$_SESSION['errorinsertar']=true;
   header('Location: ../../Administracion.php');
	}

?>
