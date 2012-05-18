<?php
include("funciones/conectar.php");

//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from producto"; 
     $stmt = $pdo->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_ASSOC);

       
       $stmt->execute();
       $results = $stmt->fetchAll();
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”
  ?>
<p style="font-size:20px ; font-family: italic; color: white">Tabla de Productos!</p>
  <?php
  //echo $nombre.$apellido.$password;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}



/* foreach($results as $fila)
 {
  echo sprintf("%d %10s %10s (%10s)<br/>",
                $fila['idproductos'],
                $fila['descripcion'],
                $fila['codigo'],
                $fila['precio']);
 };*/

?>


<?php

function borrarp ($id){
    try {
        $pdo->beginTransaction();
        $sql="delete from producto where idproducto = :identificador"; 
         $stmt = $pdo->prepare($sql);
          //$stmt->setFetchMode(PDO::FETCH_ASSOC);
           $stmt->bindParam(':identificador', $id);


           $stmt->execute();



      $pdo->commit();  //se guardaría todo “definitivamente”

      header('Location: ../../administracion.php');
    } catch (PDOException $e) {
      $pdo->rollBack();  //ante cualquier excepción, revierte todo
       echo 'La operación ha fallado: ' . $e->getMessage();
    }
}

?>

<div style="font-size:12px; color: white; overflow: auto; width: 300px; height: 100px">
    <table border="1" >
    <tr>
        <td>Id</td><td>codigo</td><td>descripcion</td><td>modelo</td><td>tamanio</td>
      <td>precio</td><td>stock</td>
    </tr>
    <?php foreach($results as $fila):?>
    <tr>
      <td><?php echo $fila['idproducto'];?></td>
      <?php $aux = $fila['idproducto'] ?>
      <td><?php echo $fila['codigo'];?></td>
      <td><?php echo $fila['descripcion'];?></td>
      <td><?php echo $fila['modelo'];?></td>
      <td><?php echo $fila['tamanio'];?></td>
      <td><?php echo $fila['precio'];?></td>
      <td><?php echo $fila['stock'];?></td>
      <td><input type="button" value="X" onclick="" style="font-size: 8px"></td>
      <td><input type="button" value="M" onclick="" style="font-size: 8px"></td>
    </tr>
    <?php endforeach;?>
    </table>
</div>