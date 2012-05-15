<?php

include("funciones/conectar.php");
extract($_POST);
session_start();
$_SESSION['identifikador']=$id;

$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from producto where idproducto = :identificador"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':identificador',$_SESSION['identifikador']);

       
       $stmt->execute();
              $results = $stmt->fetchAll();
       
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”
  //echo "<h1>Se han guardado los cambios!</h1>";
  //echo "se ha borrado el id ".$id;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}

 foreach($results as $fila)
 {

 };
?>
               
                <h1>modificar datos</h1>
        <form action="midificUltimoP.php" method="post">
            codigo<br>
            <input type="text" name="codigo" value=<?php echo $fila['codigo'];?>><br>
                        descripcion<br>
            <input type="text" name="descripcion" value=<?php echo $fila['descripcion'];?>><br>
                      
                        modelo<br>
            <input type="text" name="modelo" value=<?php echo $fila['modelo'];?>><br>
            
                        tamanio<br>
            <input type="text" name="tamanio" value=<?php echo $fila['tamanio'];?>><br>
            
                        precio<br>
            <input type="text" name="precio" value=<?php echo $fila['precio'];?>><br>
 
                        stock<br>
            <input type="text" name="stock" value=<?php echo $fila['stock'];?>><br>
            

            
           <input type="submit" value="modificarrr" >
        </form>
        <br>
