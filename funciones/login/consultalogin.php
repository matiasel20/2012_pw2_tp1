<?php

//session_start();

function consultalogin($pdo) {
    
     try {
        
        $sql = "SELECT apellido FROM cliente WHERE user = :usuario AND password = :pass";

        //preparamos un statement con el sql anterior
        $stmt = $pdo->prepare($sql);

        //especificamos la salida como un array
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//podria ser..

        //sutituimos lso parametros con los valores reales
        $stmt->bindParam(':usuario',$_POST['usuario']);
        $stmt->bindParam(':pass',md5($_POST['pass']));

        //ejecutamos la consulta
        $stmt->execute();

        //recuperamos los datos en el array asoc.
        $result = $stmt->fetchAll();        
        
    } catch(PDOException $e) {
               echo ("Error al realizar la consulta: ".$e->getMessage());   
               return 0;
    } 
    
    if (!$result[0]){
        return 0;
    }
    return 1;
}

?>
