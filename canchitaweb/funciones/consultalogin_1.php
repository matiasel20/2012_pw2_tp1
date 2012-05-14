<?php

//session_start();

function calcularFecha($dias){
 
$calculo = strtotime ("$dias days");
return date ("Y-m-d", $calculo);
}

function consultalogin($pdo,$h,$d,$c) {
    
    /*$mes = date('n');
    $dia = date('N');
    $anio = date('Y');*/
    
    $fecha = calcularFecha($d);
    
    $fecha=sprintf("%s %s:00",$fecha,$h);
    
    
    
     try {
        
        $sql = "SELECT fecha FROM alquiler WHERE fecha = :fecha and cancha = :cancha";

        //preparamos un statement con el sql anterior
        $stmt = $pdo->prepare($sql);

        //especificamos la salida como un array
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//podria ser..

        //sutituimos lso parametros con los valores reales
        $stmt->bindParam(':fecha',$fecha);
        $stmt->bindParam(':cancha',$c);

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
    return 1;
}
?>
