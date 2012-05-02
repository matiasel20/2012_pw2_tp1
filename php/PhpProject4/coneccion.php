<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    error_reporting(E_ALL);
ini_set("display_errors", true);
header('Content-Type: text/html; charset=UTF-8');     
            
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
session_start(); 

$_SESSION["Variable"] = "cosa";
           // echo $usuario." ".$password;
           
            $dsn = 'mysql:dbname=canchita2;host=127.0.0.1';

try {
    $dbh = new PDO($dsn, $usuario, $password);
    //include 'contenido.php';
   
    header("Location: contenido.php");

} catch (PDOException $e) {
    echo 'Coneccion fallida: ' . $e->getMessage();
}


        ?>
    </body>
</html>
