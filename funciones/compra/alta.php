<?php
include("../conectar.php");
include("../alquiler/consultauser.php");
extract($_GET);
session_start();

$cantidad=1;
$pdo=conectar();
$clienteid=consultaUser($pdo,$_SESSION['usuario']);
//var_dump($clienteid);
$pdo2=conectar();
$fecha2=sprintf('%s',date("Y/m/d H:i:s"));



 try {
    $pdo2->beginTransaction();
    $sql2="select stock from producto where idproducto= :productoid";
      

      
       
     $stmt2 = $pdo2->prepare($sql2);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);

       $stmt2->bindParam(':productoid',$prod);

       
       $stmt2->execute();
        $results2 = $stmt2->fetchAll();
       
   
     
  $pdo2->commit();  //se guardaría todo “definitivamente”

     //header('Location: ../../Compras.php');
} catch (PDOException $e2) {
  $pdo2->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e2->getMessage();

}

 foreach($results2 as $fila)
 {

 };

//echo $fila['stock'];

if ($fila['stock']>0){


try {
    $pdo->beginTransaction();
  $sql="update producto set stock=stock-1 where idproducto=:productoid";
      

      
       
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);


       $stmt->bindParam(':productoid',$prod);

       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     //header('Location: ../../Compras.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();

}



 try {
    $pdo->beginTransaction();
    $sql="INSERT INTO compra (cantidad,fecha,clienteid,productoid)
      VALUES (:cantidad,:fecha,:clienteid,:productoid)";
      

      
       
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':cantidad', $cantidad);
       $stmt->bindParam(':fecha',$fecha2);
       $stmt->bindParam(':clienteid',$clienteid);
       $stmt->bindParam(':productoid',$prod);

       
       $stmt->execute();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”

     //header('Location: ../../Compras.php');
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();

}


header('Location: ../../Compras.php');

}else{

 echo "<script>alert(\"No hay mas stock\")</script>";

  }

?>
<a href="../../Compras.php">Atras</a>

