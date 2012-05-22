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


<body background="top_bg.jpg" vlink="#00FF00">
    <a href="../../Alquileres.php">Atras<<</a>   
<?php if ($results=consultoreservas($pdo)):?>
      <h1>Reservas</h1><br>
      <table border="1" style="color:white">
        <tr>
          <td>IdAlquiler</td><td>Cancha</td><td>Fecha</td><td>Indumentaria</td><td>Duchas</td>
          <td>Confiteria</td>
        </tr>
        <?php foreach($results as $fila):?>
            <tr>
              <td><?php echo $fila['idalquiler'];?></td>
              <td><?php echo $fila['cancha'];?></td>
              <td><?php echo $fila['fecha'];?></td>
			  
			  <?php if ($fila['indumentaria']):?>
				<td align="center"><img src="ok.png"/></td>
			  <?php else:?>
			    <td></td>
			  <?php endif;?>
			  
			  <?php if ($fila['duchas']):?>
				<td align="center"><img src="ok.png"/></td>
			  <?php else:?>
			    <td></td>
			  <?php endif;?>
			  
			  <?php if ($fila['confiteria']):?>
				<td align="center"><img src="ok.png"/></td>
			  <?php else:?>
			    <td></td>
			  <?php endif;?>
			              
            </tr>
         <?php endforeach;?>
      </table>     
 <?php else:?>
      <h1>No se han realizado reservas</h1>     
         
<?php endif;?>


</body>



