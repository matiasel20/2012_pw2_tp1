

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
			<a id="format" class="Pisado" href="Compras.php">Compras</a>
			<a id="format" class="link" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
			<?php if(isset($_SESSION['empleado'])):?>
				<a id="format" class="link" href="Administracion.php">Administracion</a>
			<?php endif;?>	
		</div>
      
    </div>
	
	<div class="center">

		
		<div class="contenido1">
      
<?php //include("funciones/compra/formularios.php");
include("funciones/compra/sacacategoria.php"); 
include("funciones/compra/muestratablaACC.php"); 

?>


	<div id="accordion">
    <?php 
    
    $arreglo=sacacat();
    
    foreach($arreglo as $fila):?>
    
		<h3><a href="#"><?php echo $fila['nombre'];?></a></h3>
		<div class="divTabla">
<?php 	$results2=	mostrarACC($fila['idcategoria']);?>
<div style="font-size:12px; color: white; overflow: auto; width: 300px; height: 100px">
    <table border="1">
        <tr>
          <td>Codigo</td><td>Descripcion</td><td>Modelo</td><td>Tamanio</td><td>Precio</td>
          <td>Stock</td>
        </tr>
        <?php foreach($results2 as $fila):?>
            <tr>
              <td><?php echo $fila['codigo'];?></td>
              <td><?php echo $fila['descripcion'];?></td>
              <td><?php echo $fila['modelo'];?></td>
              <td><?php echo $fila['tamanio'];?></td>
              <td><?php echo $fila['precio'];?></td>
              <td><?php echo $fila['stock'];?></td>


              <td><input type="button" value="BUY" style="font-size: 8px"></td>

            </tr>
        <?php endforeach;?>
    </table>
 </div>

	</div>
    <?php endforeach;?>
    
</div>

					

			
		</div>
		
    </div>
		
  <div class="right">
   
    
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
<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> 
</div> 

</body>

</html>

