<?php

 $consulta = $_POST['consulta'];
 
 echo "mi consulta es: ".$consulta;
session_start();

//print("El valor de la variable es: ".$_SESSION["Variable"]);

/*
try {
     $sql =$consulta ;
     $stmt = $dbh->prepare($sql);
     $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $stmt->execute();
     $results = $stmt->fetchAll();
}catch (PDOException $e) {
  echo 'Error de conexión a la BD: ' . $e->getMessage();
}

foreach($results as $fila)
 {
echo "hoooohuu  ";
};*/
?>
