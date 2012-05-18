

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
      
<?php //include("funciones/compra/formularios.php");
include("funciones/compra/sacacategoria.php"); 


?>


	<div id="accordion">
    <?php 
    
    $arreglo=sacacat();
    
    foreach($arreglo as $fila):?>
    
		<h3><a href="#"><?php echo $fila['nombre'];?></a></h3>
		<div class="divTabla">

			<table class="torneo">
				<tr>
					<th>Modelo A</th>
					<th>Modelo B</th>
					<th>Modelo C</th>
					
				</tr>
				<tr>
					<td>
					<img class="productocalzado" src="compras/botin.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="productocalzado" src="compras/botin2.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="productocalzado" src="compras/botin3.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>
				<tr>
					<th>Modelo D</th>
					<th>Modelo E</th>
					<th>Modelo F</th>
					
				</tr>
				<tr>
					<td>
					<img class="productocalzado" src="compras/botin4.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="productocalzado" src="compras/botin5.jpg" alt="Click to see enlarged image"/>
					</td>
					<td>
					<img class="productocalzado" src="compras/botin6.jpg" alt="Click to see enlarged image"/>
					</td>
					
				</tr>

			</table>
	</div>
    <?php endforeach;?>
    
</div>

					

			
		</div>
		
    </div>
		
  <div class="right">
      <?php if (isset($_SESSION['usuario'])):?>
                <label sytle="text-align: right"><?php echo $_SESSION['usuario']?> <a href="funciones/logout.php" >cerrar sesion</a><label>
                <?php endif?>      
    
		<div class="contenido0" style="text-align: right">
			<FORM action="http://www.google.com/search" method="get" >
				
				<TABLE style=" border :none ; height:0">
					<tr border='none' >
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
<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> <a href="administracion.php" >Administracion</a>
</div> 

</body>

</html>

