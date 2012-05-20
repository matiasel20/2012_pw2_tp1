

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
			

		</div>
<div class="principal">
	<div class="left" >

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
	
	<div class="center" style=" width: 750px;  ">

		
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
<div style="font-size:12px; color: white; overflow: auto; width: 450px; height: 200px">
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


              <td><a href="funciones/compra/alta.php?prod=
              <?php echo $fila['idproducto'];?>"> Comprar </a></td>

            </tr>
        <?php endforeach;?>
    </table>
 </div>

	</div>
    <?php endforeach;?>
    
</div>

					

			
		</div>
		
    </div>
		

<div class="pie">
<p>Diseñado por Aspiroz, Figueroa, Gensana, Machado</p> 
</div> 

</body>

</html>

