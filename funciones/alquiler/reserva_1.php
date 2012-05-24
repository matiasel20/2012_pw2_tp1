<?php

session_start();

include("consultauser.php");
include("consultalogin_1.php");
require_once ("../conectar.php");

function check_in_range($start_date, $end_date, $evaluame) {
    $start_ts = strtotime($start_date);
    $end_ts = strtotime($end_date);
    $user_ts = strtotime($evaluame);
    return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
}

$pdo=conectar();

    //tomo el id del usuario logueado
    if (isset($_SESSION['usuario'])){
        $iduser=consultaUser($pdo,$_SESSION['usuario']);
    }
    
     
    $hora= $_REQUEST['turno'];
	$cancha= $_REQUEST['cancha'];  
    $fecha= $_REQUEST['fecha'];

	$fechac=explode("-",$fecha);//y-m-d -> m-d-y en checkdate
    
	$num_hora=date('H');
	$star_date=calcularFecha(0);
	var_dump($star_date);
	$end_date=calcularFecha(7);
    //verifico que la hora y cancha y fecha esten en el rango correcto antes de insertarlos en la base de datos
    if (($hora>=8 and $hora<=20) and ($cancha>=1 and $cancha<=3) and checkdate($fechac[1],$fechac[2],$fechac[0]) and check_in_range($start_date, $end_date,$fecha) and ($fecha!=$star_date or $hora>$num_hora)){
        $fecha=sprintf("%s %d:00",$fecha,$hora);
       
    
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
			
			$sql = "INSERT INTO alquiler (`idAlquiler`, `fecha`,`cancha`,`indumentaria`,`duchas`,`confiteria`,`clienteid`) VALUES (NULL, :fecha,:cancha,:ind,:ducha,:conf,:cliente)";

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
			$stmt->bindParam(':cliente',$iduser);

			//ejecutamos la consulta
			$stmt->execute();

			//recuperamos los datos en el array asoc.
			echo "exito!!!";        
			$_SESSION['reservaok']=true;
		} catch(PDOException $e) {
				   echo ("Error al realizar la insercion: ".$e->getMessage());
				   $_SESSION['errorAlq']=true;
		}  
		
	
    
}
else {
	$_SESSION['errorAlq']=true;
	header("location:../../Alquileres.php");
}
header("location:../../Alquileres.php");
?>
