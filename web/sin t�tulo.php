

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>

	<title>Alquileres</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="EstiloAlquiler.css" type="text/css"/>
	<link rel="stylesheet" href="javascript\css\ui-lightness\jquery-ui-1.8.16.custom.css" type="text/css"/>
	<script type="text/javascript" src="javascript\jquery.min.js"></script>
	<script type="text/javascript" src="javascript\mi_jquery.validate.js"></script>
	<script type="text/javascript" src="javascript\jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="javascript\jquery.ui.datepicker-es.js"></script>
	<script type="text/javascript" src="javascript\funciones.js"></script>
	<style>
		#format {  margin-top: 10px; width:100%; font-size:20px;}
	</style>
	
	<meta charset="utf-8">
	
	<script>
	$(function() {
		$( "#tabs" ).tabs({
			collapsible: true,
		});
	});
	</script>

</head>



<body>
	
		<div class="logo">
				<div class="pelota">
			
			<img class="pelota" src="photo.gif" alt="Click to see enlarged image"/>

		</div>
		<div class="titulo"><h1>La Canchita de Rawson</h1></div>
		<div class="calendario">
			<iframe id='cv_if1' src='http://cdn.instantcal.com/cvir.php?id=cv_nav1&theme=RE&ntype=cv_datepicker&file=http%3A%2F%2Fwww.instantcal.com%2Ftest.ics&border_radius=5' allowTransparency='true' scrolling='no' frameborder=0 height=200 width=200></iframe>
		</div>

		</div>
<div class="principal">
	<div class="left">

		<div class="menu">
			<a id="format" class="link" href="Index.php">Inicio</a>
			<a id="format" class="link" href="LogIn.php">Entrar</a>
			<a id="format" class="link" href="Registro.php">Registrarse</a>	
			<a id="format" class="link" href="Torneos.php">Torneos</a>			
			<a id="format" class="link" href="Compras.php">Compras</a>
			<a id="format" class="Pisado" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
		</div>
      
    </div>
	
	<div class="center">

	<div id="tabs">
		
		<ul>
			<li><a href="#tabs-1">Cancha 1</br>(Futbol 5)</a></li>
			<li><a href="#tabs-2">Cancha 2</br>(Futbol 5)</a></li>
			<li><a href="#tabs-3">Cancha 3</br>(Futbol 8)</a></li>
		</ul>
		
		<div id="tabs-1">
			<img class="cancha" src="alquileres/cancha5 1.jpg" alt="pp"/>
			<table class="alq">
				<tr>
					<td class="alqtitulo">horarios disponibles</td>
					<td class="alqtitulo">servicios extra</td>
				</tr>
				<tr>
					<td class="alq">
						<fieldset>
							<label class="opciones" for="hor1">14hs-15hs</label>
							<input class="alq" type="checkbox" name="g" id="hor1" value="1"/>
							<br/>
							<label class="opciones" for="hor2">20hs-21hs</label>
							<input class="alq" type="checkbox" name="g" id="hor2" value="2"/>
							<br/>
							<label class="opciones" for="hor3">23hs-00hs</label>
							<input class="alq" type="checkbox" name="g" id="hor3" value="3"/>
						</fieldset>																
					</td>		
					<td class="alq">
						<fieldset>
							<label class="opciones" for="op1">Indumentaria</label>
							<input class="alq" type="checkbox" name="s" id="op1" value="1"/>
							<br/>
							<label class="opciones" for="op2">Ducha</label>
							<input class="alq" type="checkbox" name="s" id="op2" value="2"/>
							<br/>
							<label class="opciones" for="op3">Confiteria</label>
							<input class="alq" type="checkbox" name="s" id="op3" value="3"/>
						</fieldset>	
					</td>				
				</tr>
				<tr>
					<td colspan="2" class="alq">					
						<input type="submit" value="Alquilar" />
					</td>
				</tr>
			</table>
		</div>
		
		<div id="tabs-2">
			<img class="cancha" src="alquileres/cancha5 2.jpg" alt="pp"/>
			<table class="alq">
				<tr>
					<td class="alqtitulo">horarios disponibles</td>
					<td class="alqtitulo">servicios extra</td>
				</tr>
				<tr>
					<td class="alq">
						<fieldset>
							<label class="opciones" for="hor11">14hs-15hs</label>
							<input class="alq" type="checkbox" name="g" id="hor11" value="1"/>
							<br/>
							<label class="opciones" for="hor22">20hs-21hs</label>
							<input class="alq" type="checkbox" name="g" id="hor22" value="2"/>
							<br/>
							<label class="opciones" for="hor33">23hs-00hs</label>
							<input class="alq" type="checkbox" name="g" id="hor33" value="3"/>
						</fieldset>																
					</td>		
					<td class="alq">
						<fieldset>
							<label class="opciones" for="op11">Indumentaria</label>
							<input class="alq" type="checkbox" name="s" id="op11" value="1"/>
							<br/>
							<label class="opciones" for="op22">Ducha</label>
							<input class="alq" type="checkbox" name="s" id="op22" value="2"/>
							<br/>
							<label class="opciones" for="op33">Confiteria</label>
							<input class="alq" type="checkbox" name="s" id="op33" value="33"/>
						</fieldset>	
					</td>					
				</tr>
				<tr>
					<td colspan="2" class="alq">					
						<input type="submit" value="Alquilar" />
					</td>
				</tr>
			</table>
		</div>
		
		<div id="tabs-3">
			<img class="cancha" src="alquileres/cancha8.jpg" alt="pp"/>
			<table class="alq">
				<tr>
					<td class="alqtitulo">horarios disponibles</td>
					<td class="alqtitulo">servicios extra</td>
				</tr>
				<tr>
					<td class="alq">
						<fieldset>
							<label class="opciones" for="hor111">14hs-15hs</label>
							<input class="alq" type="checkbox" name="g" id="hor111" value="1"/>
							<br/>
							<label class="opciones" for="hor222">20hs-21hs</label>
							<input class="alq" type="checkbox" name="g" id="hor222" value="2"/>
							<br/>
							<label class="opciones" for="hor333">23hs-00hs</label>
							<input class="alq" type="checkbox" name="g" id="hor333" value="3"/>
						</fieldset>																
					</td>		
					<td class="alq">
						<fieldset>
							<label class="opciones" for="op111">Indumentaria</label>
							<input class="alq" type="checkbox" name="s" id="op111" value="1"/>
							<br/>
							<label class="opciones" for="op222">Ducha</label>
							<input class="alq" type="checkbox" name="s" id="op222" value="2"/>
							<br/>
							<label class="opciones" for="op333">Confiteria</label>
							<input class="alq" type="checkbox" name="s" id="op333" value="3"/>
						</fieldset>	
					</td>					
				</tr>
				<tr>
					<td colspan="2" class="alq">					
						<input type="submit" value="Alquilar" />
					</td>
				</tr>
			</table>
		</div>

</div>
    </div>
		
    	
    <div class="right">
    
		<div class="contenido0" style="text-align: right">
			<FORM action="http://www.google.com/search" method="get" >
				
				<TABLE>
					<tr><td>
					<INPUT TYPE=text name=q size=28 maxlength=255 value="" >
					<INPUT TYPE=hidden name=hl value=es>
					<INPUT type=submit name=btnG VALUE="Búsqueda Google">
					</td></tr>
				</TABLE>
			</FORM>
			</center>
		</div>
		
		<div class="contenido3">
			<a href="http://msn.foxsports.com/fse/argentina" >
			<img class="propaganda" src="propaganda1.jpg" alt="Click to see enlarged image"/>
			</a>
			
			<a href="http://www.tycsports.com/contenidos/home.php" >
			<img class="propaganda" src="propaganda2.jpg" alt="Click to see enlarged image"/>
			</a>
			
			<a href="http://www.ole.com.ar/" >
			<img class="propaganda" src="propaganda3.jpg" alt="Click to see enlarged image"/>
			</a>

			<br/>
		</div>
  
</div>

<div class="pie">
<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> <a href="Administracion.php" >Administracion</a>
</div> 

</body>

</html>

