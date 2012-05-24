<?php
include("funciones/conectar.php");

//session_start();
$pdo=conectar();

 try {
    $pdo->beginTransaction();
    $sql="select idproducto, codigo, descripcion,
     modelo, tamanio, precio, stock, categoria.nombre as cat
     from producto join 
     categoria on (producto.categoriaid) = (categoria.idcategoria)
	order by idproducto"; 
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
    <legend><h2>Tabla Productos!</h2></legend>
    <div style="font-size:12px; color: white; overflow: auto; width: 600px; height: 100px">
        <table border="1" >
        <tr>
            <td>Id</td><td>codigo</td><td>descripcion</td><td>modelo</td><td>tamanio</td>
          <td>precio</td><td>stock</td><td>categoria</td>
        </tr>
        <?php foreach($results as $fila):?>
        <tr>
          <td><?php echo $fila['idproducto'];?></td>
          <?php $i = $fila['idproducto'] ?>
          <td><?php echo $fila['codigo'];?></td>
          <td><?php echo $fila['descripcion'];?></td>
          <td><?php echo $fila['modelo'];?></td>
          <td><?php echo $fila['tamanio'];?></td>
          <td><?php echo $fila['precio'];?></td>
          <td><?php echo $fila['stock'];?></td>
          <td><?php echo $fila['cat'];?></td>
          <td>
              <a href="funciones/abmProductos/borraP.php?idX=<?php echo $fila['idproducto']?>">Borrar</a>
          </td>
          <td><a href="funciones/abmProductos/modificaP.php?idX=<?php echo $fila['idproducto']?>">Modificar</a></td>
        </tr>
        <?php endforeach;?>
        </table>
    </div>
</fieldset>
</br>
