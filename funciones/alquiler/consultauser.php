<?php

//session_start();

function consultaUser($pdo,$user) {
    
     try {
        
        $sql = "SELECT idcliente FROM cliente WHERE user = :usuario";

        //preparamos un statement con el sql anterior
        $stmt = $pdo->prepare($sql);

        //especificamos la salida como un array
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//podria ser..

        //sutituimos lso parametros con los valores reales
        $stmt->bindParam(':usuario',$user);
        

        //ejecutamos la consulta
        $stmt->execute();

        //recuperamos los datos en el array asoc.
        $result = $stmt->fetchAll();        
        
    } catch(PDOException $e) {
               echo ("Error al realizar la consulta: ".$e->getMessage());   
               return 0;
    } 
    
    if (!$result)
        return 0;
    else
        return $result[0];
    
   
}
?>
