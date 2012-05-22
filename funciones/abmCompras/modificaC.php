<?php

include("../conectar.php");
extract($_POST);
session_start();

$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from producto where idproducto = :identificador"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
      
       if(isset ($_GET['idX'])){
           $stmt->bindParam(':identificador', $_GET['idX']);
           $_SESSION['identifikador']=$_GET['idX'];
           unset ($_GET['idX']);
       }else{
           $_SESSION['identifikador']=$id;
           $stmt->bindParam(':identificador',$_SESSION['identifikador']);
       }  
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
               
                <h1>Modificar Producto</h1>
        <form action="midificUltimoP.php" method="post">
            Codigo</br>
            <input type="text" name="codigo" value=<?php echo $fila['codigo'];?>></br>
                        Descripcion<br>
            <input type="text" name="descripcion" value=<?php echo $fila['descripcion'];?>></br>
                      
                        Modelo<br>
            <input type="text" name="modelo" value=<?php echo $fila['modelo'];?>></br>
            
                        Tamanio<br>
            <input type="text" name="tamanio" value=<?php echo $fila['tamanio'];?>></br>
            
                        Precio<br>
            <input type="text" name="precio" value=<?php echo $fila['precio'];?>></br>
 
                        Stock<br>
            <input type="text" name="stock" value=<?php echo $fila['stock'];?>></br>
            
                        Categoria<br>
            <input type="text" name="categoriaid" value=<?php echo $fila['categoriaid'];?>></br>
            
           <input type="submit" value="Modificar" >
        </form>
        </br>
