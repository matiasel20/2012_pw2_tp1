<?php
require_once("funciones/conectar.php");

//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select idalquiler, cancha, fecha,
     indumentaria, duchas, confiteria, cliente.user as user
     from alquiler join 
     cliente on (alquiler.clienteid) = (cliente.idcliente)
	where fecha>=curdate() 
	order by fecha"; 
     $stmt = $pdo->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_ASSOC);

       
       $stmt->execute();
       $results = $stmt->fetchAll();
   
     
  $pdo->commit();  //se guardaría todo “definitivamente”;
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
<fieldset>
    <legend><h2>Tabla Alquileres!</h2></legend>
    <div style="font-size:12px; color: white; overflow: auto; width: 600px; height: 100px">
        <table border="1">
        <tr>
            <td>Id</td><td>cancha</td><td>fecha</td><td>indumentaria</td><td>duchas</td>
          <td>confiteria</td><td>usuario</td>
        </tr>
        <?php foreach($results as $fila):?>
        <tr>
          <td><?php echo $fila['idalquiler'];?></td>
          <?php $i = $fila['idalquiler'] ?>
          <td><?php echo $fila['cancha'];?></td>
          <td><?php echo $fila['fecha'];?></td>
          <td><?php echo $fila['indumentaria'];?></td>
          <td><?php echo $fila['duchas'];?></td>
          <td><?php echo $fila['confiteria'];?></td>          
          <td><?php echo $fila['user'];?></td>
          <td>
              <a href="funciones/abmAlquileres/borraA.php?idX=<?php echo $fila['idalquiler']?>">Cancelar</a>
          </td>          
        </tr>
        <?php endforeach;?>
        </table>
    </div>
</fieldset>
</br>

