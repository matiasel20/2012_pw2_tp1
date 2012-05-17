<?php
//include("../conectar.php");

//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select * from cliente"; 
     $stmt = $pdo->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_ASSOC);

       
       $stmt->execute();
       $results = $stmt->fetchAll();
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”
  ?>
  <p style="font-size:20px ; font-family: italic; color: white">Tabla de Clientes!</p>
  <?php
  //echo $nombre.$apellido.$password;
} catch (PDOException $e) {
  $pdo->rollBack();  //ante cualquier excepción, revierte todo
   echo 'La operación ha fallado: ' . $e->getMessage();
}


/*
 foreach($results as $fila)
 {
  echo sprintf("%d %10s %10s (%10s)<br/>",
                $fila['idusuarios'],
                $fila['nombre'],
                $fila['apellido'],
                $fila['pass']);
 };*/
?>
 <div style="font-size:9px; overflow: auto; width: 300px; height: 100px">
    <table border="1"  style="font-size:7px; overflow: scroll; width: 5px; height: 5px" >
        <tr>
          <td>Id</td><td>user</td><td>Nombre</td><td>Apellido</td><td>Dni</td>
          <td>fechanac</td><td>direccion</td><td>localidad</td><td>telcel</td>
          <td>email</td><td>password</td>
        </tr>
        <?php foreach($results as $fila):?>
            <tr>
              <td><?php echo $fila['idcliente'];?></td>
              <td><?php echo $fila['user'];?></td>
              <td><?php echo $fila['nombre'];?></td>
              <td><?php echo $fila['apellido'];?></td>
              <td><?php echo $fila['dni'];?></td>
              <td><?php echo $fila['fechanac'];?></td>
              <td><?php echo $fila['direccion'];?></td>
              <td><?php echo $fila['localidad'];?></td>
              <td><?php echo $fila['telcel'];?></td>
              <td><?php echo $fila['email'];?></td>
              <td><?php echo "****";?></td>
              <td><input id="button" name="button" type="submit" value="X" /></td>
              <td><input id="button" name="button" type="submit" value="M" /></td>
            </tr>
        <?php endforeach;?>
    </table>
 </div>