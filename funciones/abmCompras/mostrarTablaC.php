<?php
//include("funciones/conectar.php");

//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select idcompra, fecha,clienteid, productoid, 
        cliente.user 'user', producto.descripcion 'desc', producto.modelo 'modelo', producto.tamanio 't'
     from compra join
     cliente on (compra.clienteid) = (cliente.idcliente) 
     join 
     producto on (compra.productoid) = (producto.idproducto)
	order by idcompra"; 
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
    <legend><h2>Tabla Compras!</h2></legend>
    <div style="font-size:12px; color: white; overflow: auto; width: 600px; height: 100px">
        <table border="1" >
        <tr>
            <td>Compra</td><td>Cliente</td><td>Fecha</td><td>Descripcion</td><td>Modelo</td>
          <td>Tamanio</td>
        </tr>
        <?php foreach($results as $fila):?>
        <tr> 

              <td><?php echo $fila['idcompra'] ?></td>
          <td><?php echo $fila['user'];?></td>

          <td><?php echo $fila['fecha'];?></td>
          <td><?php echo $fila['desc'];?></td>
          <td><?php echo $fila['modelo'];?></td>
          <td><?php echo $fila['t'];?></td>

        </tr>
        <?php endforeach;?>
        </table>
    </div>
</fieldset>        
