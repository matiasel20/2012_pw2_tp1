

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <?php session_start();?>




<head>

	<title>Torneos</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="css/EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="css/EstiloTorneo.css" type="text/css"/>
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
		<div class="calendario" id="calendario" style="font-size:0.5em">
		</div>
		</div>
<div class="principal">
	<div class="left">

		<div class="menu">
			<a id="format" class="link" href="Index.php">Inicio</a>
			<a id="format" class="link" href="LogIn.php">Entrar</a>
			<a id="format" class="link" href="Registro.php">Registrarse</a>	
			<a id="format" class="Pisado" href="Torneos.php">Torneos</a>			
			<a id="format" class="link" href="Compras.php">Compras</a>
			<a id="format" class="link" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
		</div>
      
    </div>
	
	<div class="center">

		
		<div class="contenido1">
			<b>Historial:</b>
<table class="torneo">
				<tr>
					<th>Temporada</th>
					<th>Torneo</th>
					<th>Campeon</th>
					<th>Sub Campeon</th>
				</tr>
				<tr>
					<td>2009</td>
					<td>Copa de Verano</td>
					<td>Los Pitufos</td>
					<td>Los Delfines</td>
				</tr>
				<tr>
					<td>2010</td>
					<td>Copa de Otoño</td>
					<td>Los Pitufos</td>
					<td>Los del Tablon</td>
				</tr>
				<tr>
					<td>2010</td>
					<td>Copa de Invierno</td>
					<td>Los Pitufos</td>
					<td>Los Emos</td>
					
				</tr>
				<tr>
					<td>2010</td>
					<td>Copa de Primavera</td>
					<td>Los Abejas</td>
					<td>Frutillita y los demas</td>
				</tr>
				<tr>
					<td>2011</td>
					<td>Copa de Verano</td>
					<td>_____</td>
					<td>_____</td>
				</tr>
			</table>
					<b><a href="Registro.php">Participar ahora!</a></b>
					<br/><br/>
					<b> Los Abejas!, Ultimos Campeones!</b>	

<img class="campeon" src="img/abejas.jpg" alt="Click to see enlarged image"/>

			
		</div>
		
    </div>
		
    	
    <div class="right">
         <div style="text-align: right">
                        <?php if (isset($_SESSION['usuario'])):?>
                            <label sytle="text-align: right"><?php echo $_SESSION['usuario']?> <a href="funciones/logout.php" >cerrar sesion</a></label>
                        <?php endif?>      
               </div>
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
<div class="pie">
<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> <a href="Administracion.php" >Administracion</a>
</div> 
</div> 

</body>

</html>

