

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>

	<title>Compras</title>
        
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="css/EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="css/EstiloCompras.css" type="text/css"/>
	<link rel="stylesheet" href="javascript\css\ui-lightness\jquery-ui-1.8.16.custom.css" type="text/css"/>
        
	<script type="text/javascript" src="javascript\jquery.min.js"></script>
	<script type="text/javascript" src="javascript\mi_jquery.validate.js"></script>
	<script type="text/javascript" src="javascript\jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="javascript\jquery.ui.datepicker-es.js"></script>
	<script type="text/javascript" src="javascript\funciones.js"></script>
	<style>
		#format {  margin-top: 10px; width:100%; font-size:20px;}
	</style>
	
	<SCRIPT LANGUAGE="JavaScript">
		function validar(){
			if (Color.options[Color.selectedIndex].value == ""||
				Talle.options[Talle.selectedIndex].value == ""||
				Marca.options[Marca.selectedIndex].value == ""){
				
				alert("Seleccione valores");
				return false;
			}else 
				return true;
		}
	</SCRIPT>

</head>



<body>		
		
		<div class="logo">
			<div class="pelota">
				<img class="pelota" src="img/photo.gif" alt="Click to see enlarged image"/>
			</div>
			<div class="titulo"><h1>La Canchita de Rawson</h1>
			</div>
			
			<div class="calendario" id="calendario" style="font-size:0.5em;">
			</div>
		</div>
<div class="principal">
	<div class="left">

		<div class="menu">
			<a id="format" class="link" href="Index.php">Inicio</a>
			<a id="format" class="link" href="LogIn.php">Entrar</a>
			<a id="format" class="link" href="Registro.php">Registrarse</a>	
			<a id="format" class="link" href="Torneos.php">Torneos</a>			
			<a id="format" class="Pisado" href="Compras.php">Compras</a>
			<a id="format" class="link" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
		</div>
      
    </div>
	
	<div class="center">

		
		<div class="contenido1">
			<form name="formulario" id="dialog" title="Comprar" action="LogIn.php">
				<select id="Color" name="Color">
					<option value="">Color</option>
					<option value="1">Rojo</option>
					<option value="2">Azul</option>
					<option value="3">Verde</option>
					<option value="4">Rosa</option>
				</select>
				<select id="Talle" name="Talle">
					<option value="">Talle</option>
					<option value="1">40</option>
					<option value="2">41</option>
					<option value="3">42</option>
					<option value="4">43</option>
				</select>
				<select id="Marca" name="Marca">
					<option value="">Marca</option>
					<option value="1">Nike</option>
					<option value="2">Adida</option>
					<option value="3">Nada</option>

				</select>
				<input id="button" name="button" type="submit" value="Enviar" onclick="return validar()"/> 
				
			</form>


	<div id="accordion">
		<h3><a href="#">Calzado</a></h3>
		<div class="divTabla">

			<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/botin.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/botin2.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/botin3.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/botin4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/botin5.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/botin6.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
	<h3><a href="#">Pelotas</a></h3>
	<div>
		<div class="divTabla">
			<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/pelota1.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pelota2.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pelota3.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/pelota4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pelota5.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pelota6.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
	</div>
	<h3><a href="#">Conjuntos</a></h3>
	<div>
		<div class="divTabla">
		<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/conjunto.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/conjunto1.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/conjunto2.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/conjunto3.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/conjunto4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/conjunto5.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
	</div>
	<h3><a href="#">Camisetas</a></h3>
	<div>
		<div class="divTabla">
		<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/camiseta.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/camiseta1.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/camiseta2.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/camiseta3.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/camiseta4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/camiseta5.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
	</div>
		<h3><a href="#">Pantalones</a></h3>
	<div>
		<div class="divTabla">
				<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/pantalon.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pantalon1.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pantalon2.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/pantalon3.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pantalon4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/pantalon5.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
	</div>
		<h3><a href="#">Medias</a></h3>
	<div>
		<div class="divTabla">
		<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/medias.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/medias1.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/medias2.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
				</tr>
				<tr>
					<td>
					<img class="producto" src="compras/medias3.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/medias4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="producto" src="compras/medias5.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
	</div>
</div>

					

			
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

</body>

</html>

