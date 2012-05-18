<?php

session_start();

include("consultauser.php");
require_once("../conectar.php");





$pdo=conectar();

function consultoreservas($pdo) {
    
    $idbusq=consultauser($pdo,$_SESSION['usuario']);
    
     try {
        
        $sql = "SELECT idalquiler, cancha, fecha, indumentaria, duchas, confiteria FROM alquiler WHERE clienteid = :usuario";

        //preparamos un statement con el sql anterior
        $stmt = $pdo->prepare($sql);

        //especificamos la salida como un array
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//podria ser..

        //sutituimos lso parametros con los valores reales
        $stmt->bindParam(':usuario',$idbusq['idcliente']);

        //ejecutamos la consulta
        $stmt->execute();

        //recuperamos los datos en el array asoc.
        $result = $stmt->fetchAll();        
        
    } catch(PDOException $e) {
               echo ("Error al realizar la consulta: ".$e->getMessage());   
               return 0;
    } 
    
     if (!$result){
        return 0;
    }
    return $result;
    
 
}


?>




<?php if ($results=consultoreservas($pdo)):?>
      <h1>reservas</h1><br>
      <table border="1">
        <tr>
          <td>IdAlquiler</td><td>cancha</td><td>fecha</td><td>indumentaria</td><td>duchas</td>
          <td>confiteria</td>
        </tr>
        <?php foreach($results as $fila):?>
            <tr>
              <td><?php echo $fila['idalquiler'];?></td>
              <td><?php echo $fila['cancha'];?></td>
              <td><?php echo $fila['fecha'];?></td>
              <td><?php echo $fila['indumentaria'];?></td>
              <td><?php echo $fila['duchas'];?></td>
              <td><?php echo $fila['confiteria'];?></td>              
            </tr>
         <?php endforeach;?>
<?php else:?>
            
         
<?php endif;?>




