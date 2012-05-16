<?php

session_start();

include("consultauser.php");


    try {

        $pdo = new PDO ('mysql:host=localhost;dbname=canchitarw', 'root','');

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES UTF8");//para evitar problemas con los acentos 
        
        

     } catch (PDOException $e) {
       echo 'Error de conexión a la BD: '.$e->getMessage();
     }

    
    /*$mes = date('n');
    $dia = date('N');
    $anio = date('Y');*/
    
    if (isset($_SESSION['usuario'])){
        $iduser=consultaUser($pdo,$_SESSION['usuario']);
    }
    
     
    $turno=explode("/",$_REQUEST['turno']);
    
    var_dump($turno);
    
    if (($turno[1]>=8 and $turno[1]<=20) and ($turno[0]>=1 and $turno[0]<=3)){
        $cancha = $turno[0];
        $hora = $turno[1];
        $fecha=sprintf("%s %s:00",$_REQUEST['fecha'],$hora);
    }
    
    
    
    
    
    
    var_dump($fecha);
    var_dump($iduser);
    
    
    $indumentaria=0;
    $ducha=0;
    $confiteria=0;
    
    if (isset($_REQUEST['s1'])){
        $indumentaria=1;
        var_dump($_REQUEST['s1']);
    }
    if (isset($_REQUEST['s2'])){
        $ducha=1;
        var_dump($_REQUEST['s2']);
    }
    if (isset($_REQUEST['s3'])){
        $confiteria=1;
        var_dump($_REQUEST['s3']);
    }
        
        
    
    
    
     try {
        
        $sql = "INSERT INTO alquiler (`idAlquiler`, `fecha`,`cancha`,`indumentaria`,`duchas`,`confiteria`,`Cliente_idcliente`) VALUES (NULL, :fecha,:cancha,:ind,:ducha,:conf,:cliente)";

        //preparamos un statement con el sql anterior
        $stmt = $pdo->prepare($sql);

        //especificamos la salida como un array
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//podria ser..

        //sutituimos lso parametros con los valores reales
        $stmt->bindParam(':fecha',$fecha);
        $stmt->bindParam(':cancha',$cancha);
        $stmt->bindParam(':ind',$indumentaria);
        $stmt->bindParam(':ducha',$ducha);
        $stmt->bindParam(':conf',$confiteria);
        $stmt->bindParam(':cliente',$iduser['idcliente']);

        //ejecutamos la consulta
        $stmt->execute();

        //recuperamos los datos en el array asoc.
        echo "exito!!!";        
        $_SESSION['reservaok']=true;
    } catch(PDOException $e) {
               echo ("Error al realizar la insercion: ".$e->getMessage());
               $_SESSION['errorAlq']=true;
    }  
    
header("location:../alquileres.php");
    


?>
