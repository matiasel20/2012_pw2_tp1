

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <?php session_start();?>




<head>

	<title>Log In</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="css/EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="javascript\css\ui-lightness\jquery-ui-1.8.16.custom.css" type="text/css"/>
	<script type="text/javascript" src="javascript\jquery.min.js"></script>
	<script type="text/javascript" src="javascript\mi_jquery.validate.js"></script>
	<script type="text/javascript" src="javascript\jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="javascript\jquery.ui.datepicker-es.js"></script>
	<script type="text/javascript" src="javascript\funciones.js"></script>
        <script type="text/javascript" src="javascript\vanadium_es.js"></script>
        
	<style>
            table  { overflow: visible; width: 50px; height: 50px}  
            #format {  margin-top: 10px; width:100%; font-size:20px;}
	</style>
	
        <style>
	#format {  margin-top: 10px; width:100%; font-size:20px;}
	label.error { float: none; color: #f7fa19; font-weight:bold; padding-left: .5em; vertical-align: top; font-size:10px; }
		.ui-progressbar-value { background-image: url(javascript/css/ui-lightness/images/progressbar_short.gif); }
.vanadium-advice.vanadium-invalid, .vanadium-advice.vanadium-invalid * {
float: none; color: #f7fa19; font-weight:bold; padding-left: .5em; vertical-align: top; font-size:10px; 
}

	</style>
	
	<script>
	$(function() {
		$( 'a.link' ).button();
		$( 'a.Pisado').button({disabled: true});
	});
	</script>
	
</head>



<body>		
		
		<div class="logo">
				<div class="pelota">
			
			<img class="pelota" src="img/photo.gif" alt="Click to see enlarged image"/>

		</div>
		<div class="titulo"><h1>La Canchita de Rawson</h1></div>
		
		
		<div class="calendario" id="calendario" style="font-size:0.5em">
		</div>

		</div>
<div class="principal">
	<div class="left">
		<div style="text-align: center">
			<?php if (isset($_SESSION['usuario'])):?>
				<label sytle="text-align: right"><?php echo $_SESSION['usuario']?> <a href="funciones/logout.php" >cerrar sesion</a></label>
            <?php elseif (isset($_SESSION['empleado'])):?>
				<label sytle="text-align: right"><?php echo $_SESSION['empleado']?> <a href="funciones/logout.php" >cerrar sesion</a></label>
			<?php endif;?>
        </div> 


		<div class="menu">
			<a id="format" class="link" href="Index.php">Inicio</a>
			<?php if(!isset($_SESSION['usuario']) and !isset($_SESSION['empleado'])):?>
				<a id="format" class="link" href="LogIn.php">Entrar</a>
			<?php endif;?>
			<a id="format" class="link" href="Registro.php">Registrarse</a>	
			<a id="format" class="link" href="Torneos.php">Torneos</a>			
			<a id="format" class="link" href="Compras.php">Compras</a>
			<a id="format" class="link" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
			<?php if(isset($_SESSION['empleado'])):?>
				<a id="format" class="Pisado" href="Administracion.php">Administracion</a>
			<?php endif;?>	
		</div>
      
         </div>
	
    <div class="center" style="overflow: visible;">
            <?php include "funciones/abmProductos/formularioABMP.php";
                  include "funciones/abmUsuarios/formularioABM.php";
                  include "funciones/abmCompras/formularioABMC.php"?>
		
    </div>
		
   
 </div>

<div class="pie">
<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> Administracion
</div> 

</body>

</html>

