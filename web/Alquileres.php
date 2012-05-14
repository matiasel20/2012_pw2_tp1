

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

<!--
**************************Aca se hace un cuadro para la alerta(javascrit-jquery)******************************		
-->
	
	<form id="dialog-confirm" title="Sugerencia" method="post" action="LogIn.php">
		Seguro q no desea solicitar algun servicio?</br>
		<input type="submit" value="Si" onclick="$( '#dialog-confirm' ).dialog( 'close' );return true;"/>
		<input type="submit" value="No" onclick="$( '#dialog-confirm' ).dialog( 'close' );return false;"/>
	</form>
	
	
	<div id="alerta" title="Error">
		</br>
		Seleccione horario
		
	</div>

<!--
***************************************************************************************************************
-->
	
	<meta charset="utf-8">
</head>



<body>
	
		<div class="logo">
				<div class="pelota">
			
			<img class="pelota" src="photo.gif" alt="Click to see enlarged image"/>

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
					<form name="formulario" method="post" action="LogIn.php">
						<tr>
							<td class="alq">
								<fieldset>
									<label class= "option" for="localidad" style="font-size:23px">Horario:</br></br></label>
									<select name="horarios" class="required">
										<option value="">Seleccione</option>
										<option value="0">9-10hs</option>
										<option value="1">10-11hs</option>
										<option value="2">11-12hs</option>
										<option value="3">15-14hs</option>
										<option value="4">16-17hs</option>
										<option value="5">17-18hs</option>
										<option value="6">18-19hs</option>
										<option value="7">19-20hs</option>
										<option value="8">20-21hs</option>
									</select>
								</fieldset>																
							</td>		
							<td class="alq">
								<fieldset>
									Servicios Adicionales</br><div style="width: auto; float: left">
									<label class="opciones" for="op1">
										<input class="opciones" type="checkbox" name="s1" id="op1" value="1"/>
									</label>
									</br>
									<label class="opciones" for="op2">
										<input class="alq" type="checkbox" name="s2" id="op2" value="2"/>
									</label>
									</br>
									<label class="opciones" for="op3">
										<input class="alq" type="checkbox" name="s3" id="op3" value="3"/>
									</label>
									</div>
									<div style="text-align:left">-Indumentaria</div>
									<div style="text-align:left">-Ducha</div>
									<div style="text-align:left">-Confiteria</div>
								</fieldset>
							</td>				
						</tr>
						<td colspan="2" class="alq">					
							<input class="submit" type="submit" value="Alquilar" onclick="return validar();" />
						</td>
						
					</form>
				</table>
		</div>
		
		<div id="tabs-2">
			<img class="cancha" src="alquileres/cancha5 2.jpg" alt="pp"/>
			<table class="alq">
					<form id="formulario" method="post">
						<tr>
							<td class="alq">
								<fieldset>
									<label class= "option" for="localidad" style="font-size:23px">Horario:</br></br></label>
									<select id="horario"  class="required">
										<option >Seleccione</option>
										<option value="0">9-10hs</option>
										<option value="1">10-11hs</option>
										<option value="2">11-12hs</option>
										<option value="3">15-14hs</option>
										<option value="4">16-17hs</option>
										<option value="5">17-18hs</option>
										<option value="6">18-19hs</option>
										<option value="7">19-20hs</option>
										<option value="8">20-21hs</option>
									</select>
								</fieldset>																
							</td>		
							<td class="alq">
								<fieldset>
									Servicios Adicionales</br><div style="width: auto; float: left">
									<label class="opciones" for="op1">
										<input class="opciones" type="checkbox" name="s" id="op1" value="1"/>
									</label>
									</br>
									<label class="opciones" for="op2">
										<input class="alq" type="checkbox" name="s" id="op2" value="2"/>
									</label>
									</br>
									<label class="opciones" for="op3">
										<input class="alq" type="checkbox" name="s" id="op3" value="3"/>
									</label>
									</div>
									<div style="text-align:left">-Indumentaria</div>
									<div style="text-align:left">-Ducha</div>
									<div style="text-align:left">-Confiteria</div>
								</fieldset>
							</td>				
						</tr>
					</form>
					<tr>
						<td colspan="2" class="alq">					
							<input type="submit" value="Alquilar" href="Registro.php" />
						</td>
					</tr>
				</table>
		</div>
		
		<div id="tabs-3">
			<img class="cancha" src="alquileres/cancha8.jpg" alt="pp"/>
			<table class="alq">
					<form id="formulario" method="post">
						<tr>
							<td class="alq">
								<fieldset>
									<label class= "option" for="localidad" style="font-size:23px">Horario:</br></br></label>
									<select id="horario"  class="required">
										<option >Seleccione</option>
										<option value="0">9-10hs</option>
										<option value="1">10-11hs</option>
										<option value="2">11-12hs</option>
										<option value="3">15-14hs</option>
										<option value="4">16-17hs</option>
										<option value="5">17-18hs</option>
										<option value="6">18-19hs</option>
										<option value="7">19-20hs</option>
										<option value="8">20-21hs</option>
									</select>
								</fieldset>																
							</td>		
							<td class="alq">
								<fieldset>
									Servicios Adicionales</br><div style="width: auto; float: left">
									<label class="opciones" for="op1">
										<input class="opciones" type="checkbox" name="s" id="op1" value="1"/>
									</label>
									</br>
									<label class="opciones" for="op2">
										<input class="alq" type="checkbox" name="s" id="op2" value="2"/>
									</label>
									</br>
									<label class="opciones" for="op3">
										<input class="alq" type="checkbox" name="s" id="op3" value="3"/>
									</label>
									</div>
									<div style="text-align:left">-Indumentaria</div>
									<div style="text-align:left">-Ducha</div>
									<div style="text-align:left">-Confiteria</div>
								</fieldset>
							</td>				
						</tr>
					</form>
					<tr>
						<td colspan="2" class="alq">					
							<input type="submit" value="Alquilar" href="Registro.php" />
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

