

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php session_start();?>



<head>

				
<script type="text/javascript"> 
	
</script>

	<title>Index</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="css/EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="javascript\css\ui-lightness\jquery-ui-1.8.16.custom.css" type="text/css"/>
	<script type="text/javascript" src="javascript\jquery.min.js"></script>
	<script type="text/javascript" src="javascript\mi_jquery.validate.js"></script>
	<script type="text/javascript" src="javascript\jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="javascript\jquery.ui.datepicker-es.js"></script>
	<script type="text/javascript" src="javascript\funciones.js"></script>
	<style>
	#format {  margin-top: 10px; width:100%; font-size:20px;}
	</style>
	
	
</head>



<body>


		
		
<div class="logo">
   <div class="pelota">
        <img class="pelota" src="img/photo.gif" alt="Click to see enlarged image"/>
    </div>
    <div class="titulo"><h1>La Canchita de Rawson</h1></div>
    <div class="calendario" id="calendario" style="font-size:0.5em"></div>

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
			<a id="format" class="Pisado" href="Index.php">Inicio</a>
			<?php if(!isset($_SESSION['usuario']) and !isset($_SESSION['empleado'])):?>
				<a id="format" class="link" href="LogIn.php">Entrar</a>
			<?php endif;?>
			<a id="format" class="link" href="Registro.php">Registrarse</a>	
			<a id="format" class="link" href="Torneos.php">Torneos</a>			
			<a id="format" class="link" href="Compras.php">Compras</a>
			<a id="format" class="link" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
			<?php if(isset($_SESSION['empleado'])):?>
				<a id="format" class="link" href="Administracion.php">Administracion</a>
			<?php endif;?>	
		</div>
      
    </div>

    <div class="center">

		<div class="contenido1">
			<b>Galeria de Imagenes</b>
			
			<table border="0" cellpadding="0" align="center">
			  <tr>
				<td width="100%"><img src="noticias/noticia1.JPG" width="400" height="250" name="galeria"/></td>
			  </tr>
			  <tr>
				<td width="100%">
				<form method="POST" name="rotater">
				  <div align="center">
				   <input type="button" value="--Anterior" name="B2" onClick="window.clearTimeout(timeoutID);  backward()"/>
				   <input type="button" value="Play>|" name="B0" onClick="window.setTimeout('automatico()', 3000, true);"/>
				   <input type="button" value="Siguiente++" name="B1" onClick="window.clearTimeout(timeoutID);  forward()"/>
                                   <br></br>
                                       
                                       
				  </div>
				 </form>
				</td>
			  </tr>
			</table>
			<b>Quienes somos:</b>
			<div class="cuadro3">
				<p>En el año 2009 en la direccion rivadavia 666, nacio este club deportivo "La canchita de Rawson" de la mano del señor Gensana Matías.
				Con el apoyo de un pequeño capital financiero se pudo establecer esta institucion.
				Dicha institucion brinda el servicio de alquileres de espacios deportivos, especialmente para practicar
				futbol, ademas de diversos servicios extradeportivos para el esparcimiento del socio.
			   </p> 
			</div>
		
		
		</div>
		
    </div>

    <div class="right">
        

		<div class="contenido0" style="text-align: right">
			<FORM action="http://www.google.com/search" method="get" >
					<INPUT TYPE="text" name="q" size="26" maxlength="255" value="" />
					<INPUT TYPE="hidden" name="hl" value="es"/>
                                        <INPUT type="submit" name="btnG" VALUE="Búsqueda Google"/>
			</FORM>
		</div>
		
		<div class="contenido3">
			<a href="http://msn.foxsports.com/fse/argentina" >
			<img class="propaganda" src="img/propaganda1.jpg" alt="Click to see enlarged image"/>
			</a>
			
			<a href="http://www.tycsports.com/contenidos/home.php" >
			<img class="propaganda" src="img/propaganda2.jpg" alt="Click to see enlarged image"/>
			</a>
			
			<a href="http://www.ole.com.ar/" >
			<img class="propaganda" src="img/propaganda3.jpg" alt="Click to see enlarged image"/>
			</a>

			<br/>
		</div>
  
 
    
   </div>
</div>
<div class="pie">
	<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> 
	
	
	
</div> 

</body>

</html>

