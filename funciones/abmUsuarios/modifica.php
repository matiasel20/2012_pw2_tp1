<?php

include("../conectar.php");
extract($_POST);
session_start();
$_SESSION['identifikador']=$id;

$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from cliente where idcliente = :identificador"; 
     $stmt = $pdo->prepare($sql);
      //$stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->bindParam(':identificador', $_SESSION['identifikador']);

       
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
        <form action="midificUltimo.php" method="post">

           

            
            user<br>
            <input type="text" name="user" value="<?php echo $fila['user'];?>"><br>
            nombre<br>
            <input type="text" name="nombre" value="<?php echo $fila['nombre'];?>"><br>
            apellido<br>
            <input type="text" name="apellido" value="<?php echo $fila['apellido'];?>"><br>
            
                        dni<br>
            <input type="text" name="dni" value="<?php echo $fila['dni'];?>"><br>
                        fechanac<br>
            <input type="text" name="fechanac" value="<?php echo $fila['fechanac'];?>"><br>
                        direccion<br>
            <input type="text" name="direccion" value="<?php echo $fila['direccion'];?>"><br>
                        localidad<br>
            <input type="text" name="localidad" value="<?php echo $fila['localidad'];?> "><br>
                        telcel<br>
            <input type="text" name="telcel" value="<?php echo $fila['telcel'];?>"><br>
                        email<br>
            <input type="text" name="email" value="<?php echo $fila['email'];?>"><br>
                        password<br>
            <input type="password" name="password" value="<?php echo $fila['password'];?>"><br>
            
           <input type="submit" value="modificarrr" >
        </form>
        <br>
