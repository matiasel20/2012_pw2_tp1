<?php

include("../conectar.php");
extract($_POST);
session_start();

$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from cliente where idcliente = :identificador"; 
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
               
        <h1>Modificar Usuario</h1>
        <form action="midificUltimo.php" method="post">

           

            
            User<br>
            <input type="text" name="user" value="<?php echo $fila['user'];?>"><br>
            Nombre<br>
            <input type="text" name="nombre" value="<?php echo $fila['nombre'];?>"><br>
            Apellido<br>
            <input type="text" name="apellido" value="<?php echo $fila['apellido'];?>"><br>
            
                        Dni<br>
            <input type="text" name="dni" value="<?php echo $fila['dni'];?>"><br>
                        Fechanac<br>
            <input type="text" name="fechanac" value="<?php echo $fila['fechanac'];?>"><br>
                        Direccion<br>
            <input type="text" name="direccion" value="<?php echo $fila['direccion'];?>"><br>
                        Localidad<br>
            <input type="text" name="localidad" value="<?php echo $fila['localidad'];?> "><br>
                        Telcel<br>
            <input type="text" name="telcel" value="<?php echo $fila['telcel'];?>"><br>
                        Email<br>
            <input type="text" name="email" value="<?php echo $fila['email'];?>"><br>
                        Password<br>
            <input type="password" name="password" value="<?php echo $fila['password'];?>"><br>
            
           <input type="submit" value="Modificar" >
        </form>
        <br>
