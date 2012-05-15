

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>

	<title>Registro</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="css/EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="javascript\css\ui-lightness\jquery-ui-1.8.16.custom.css" type="text/css"/>
	<script type="text/javascript" src="javascript\jquery.min.js"></script>
	<script type="text/javascript" src="javascript\mi_jquery.validate.js"></script>
	<script type="text/javascript" src="javascript\jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="javascript\jquery.ui.datepicker-es.js"></script>
	<script type="text/javascript" src="javascript\vanadium_es.js"></script>
	<script type="text/javascript" src="javascript\funciones.js"></script>
	


	<style>
	#format {  margin-top: 10px; width:100%; font-size:20px;}
	label.error { float: none; color: #f7fa19; font-weight:bold; padding-left: .5em; vertical-align: top; font-size:10px; }
		.ui-progressbar-value { background-image: url(javascript/css/ui-lightness/images/progressbar_short.gif); }
.vanadium-advice.vanadium-invalid, .vanadium-advice.vanadium-invalid * {
float: none; color: #f7fa19; font-weight:bold; padding-left: .5em; vertical-align: top; font-size:10px; 
}

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
			<a id="format" class="Pisado" href="Registro.php">Registrarse</a>	
			<a id="format" class="link" href="Torneos.php">Torneos</a>			
			<a id="format" class="link" href="Compras.php">Compras</a>
			<a id="format" class="link" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
		</div>
      
    </div>
	
	<div class="center">
		<div class="contenido1" style="text-align:left;">
			<form id="formulario" method="post" class="formulario">
			<h2>Registro</h2>
			<br/>
			<label>Nombre</label><br/>
			<input type="text" name="nomb" id="nomb" class="required" value= ""/>
			<br/>
			<label>Apellido</label><br/>
			<input type="text" name="ape" id="ape" class="required" value= ""/>
			<br/>
			<label>Fecha</label><br/>
			<input type="text" name="cuenta" id="cuenta" value= ""  class="required"/>
			<br/><br/>
			
			<label>Telefono</label><br/>


			<input type="text" name="telnum" id="telnum" value= ""/>

			<br/><br/>
			<label class= "option" for="localidad">Localidad:</label>
			<select id="localidad"  name="localidad">
				<option value="">Seleccione...</option>
				<option value="1">Rawson</option>
				<option value="2">Trelew</option>
				<option value="3">P.Madrin</option>
			</select>
			<br/>
			<label>direccion</label><br/>
			<input type="text" name="dir" id="dir" class="required" value= ""/>
			<br/>
			<label>Usuario</label><br/>
			<input type="text" name="usuario" id="usuario" class="required"/>
			<br/>
			<label>E-mail</label><br/>
			<input type="text" name="mail" id="mail" class="required email"/>
			<br/>
			<label>Contrase&ntilde;a</label><br/>
			<input type="password" name="pass1" id="pass1" class="required"/>
			<br/>
			<label>Validar Contrase&ntilde;a</label><br/>
			<input type="password" name="pass2" id="pass2" class="required"/>
			<br/>
			<input type="checkbox" name="lelele" id="lololo"/>
			<label class= "option" for="nombre">Recibir Noticias de nuestra WEB</label><br/>
			<input type="checkbox" name="lalala" id="lululu"/>
			<label class= "option" for="nombre">Recibir Catalogo de indumentaria y equipo</label><br/>
			<input type="checkbox" name="lalala" id="lululu2"/>
			<label class= "option" for="nombre">Recibir Publicided de nuestros sponsors</label><br/>
			
			<br/>
			<div style="height: 20px;" id="progressbar"></div>
			<br/>
			<input id="button" name="button" type="submit" value="Enviar" />
		</form>
		</div>
		
		<br/>
		
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

