<?php



function conectar(){
    include "datos_conexion.php";
    try {

        //$pdo = new PDO ('mysql:host=localhost;dbname=canchitarw', 'root','');
        $pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES UTF8");//para evitar problemas con los acentos 
        
        return $pdo;

     } catch (PDOException $e) {
       echo 'Error de conexión a la BD: '.$e->getMessage();
     }
}         
           
?>
