

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>

	<title>Alquileres</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta name="generator" content="Geany 0.18" />

	<link rel="stylesheet" href="css/EstiloIndex.css" type="text/css"/>
	<link rel="stylesheet" href="css/EstiloAlquiler.css" type="text/css"/>
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
	
	<form id="dialog-confirm" title="Sugerencia" method="post" action="LogIn.html">
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
	
	<meta charset="utf-8"/>
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
			<a id="format" class="link" href="Torneos.php">Torneos</a>			
			<a id="format" class="link" href="Compras.php">Compras</a>
			<a id="format" class="Pisado" href="Alquileres.php">Alquileres</a>
			<a id="format" class="link" href="Proveedores.php">Proveedores</a>
		</div>
      
    </div>
	
	<div class="center">
         
         <?php ?>
         <?php
         
            session_start();
            
            if(!isset($_SESSION['usuario'])){            
                echo"usted no esta logueado!.<br>";            
            }
            
            if (isset($_SESSION['errorAlq'])) {
                echo "<script>alert(\"horario no disponible\")</script>";
                unset($_SESSION['errorAlq']);
            }
            
            if (isset($_SESSION['reservaok'])) {
                echo "<script>alert(\"su reserva fue realizada\")</script>";
                unset($_SESSION['reservaok']);
            }
            
        
            include "funciones/alquiler/consultalogin_1.php";
            include "funciones/conectar.php";            
            

            setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
            //echo strftime("hoy es %A %d de %B de %Y");
            
            
            $pdo=conectar();

        ?>
            
        <?php
            //vector donde se guardan los horarios disponibles correspondiente al dia de la semana
            $semana = array('lunes'=> array(),
                            'martes' => array(),
                            'miercoles' => array(),
                            'jueves' => array(),
                            'viernes' => array(),
                            'sabado' => array(),
                            'domingo' => array()
                      );
            
            $nombre_dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
            
            //asigno a cada dia los horarios disponibles, consideramos que cada dia tiene un horario corrido de 8:00 a 20:00 hs
            foreach ($semana as $dia => $horarios) {
                for ($i=8;$i<=20;$i++){
                    $horarios[]=$i;
                }
                $semana[$dia]=$horarios;
            }        
            
            

            
                    
        ?>
            
        <?php 
            $num_dia=date('N');
            $num_hora=date('H');           
        ?>   

            <div id="tabs">

                    <ul>
                            <li><a href="#tabs-1">Cancha 1</br>(Futbol 5)</a></li>
                            <li><a href="#tabs-2">Cancha 2</br>(Futbol 5)</a></li>
                            <li><a href="#tabs-3">Cancha 3</br>(Futbol 8)</a></li>
                    </ul>

                    <div id="tabs-1">
                            <img class="cancha" src="alquileres/cancha5 1.jpg" alt="pp"/>
                            
                            <?php if(!isset($_SESSION['usuario'])):?>          
                                <label style="color:#8D0202;">usuario no identificado</label><br>
                             <?php else:?>
                                    <br><a href="funciones/alquiler/mostrarReservas.php" >ver reservas realizadas</a><br>
                            <?php endif;?>        
                           
                                    
                                
                            <?php for($i=0;$i<8;$i++):?>         
                            <?php 
                            $j=$i+$num_dia-1;
                            //echo $nombre_dias[$j%7]." ".calcularfecha($i);
                            $horario=$semana[$nombre_dias[$j%7]];

                            ?>
                            <label style="color:yellow;margin-left:8em"><?php echo $nombre_dias[$j%7]." ".calcularfecha($i);?></label>
                            <table class="alq">
                                <form name="formulario" method="post" action="funciones/alquiler/reserva_1.php">
                                <input type="hidden" value="<?php echo calcularfecha($i)?>" name="fecha"/>

                                <tr>
                                    <td class="alq">
                                            <fieldset>
                                                <label class= "option" for="localidad" style="font-size:23px">Horario:<br><br></label>
                                                <select name="turno" class="required">
                                                    <?php foreach($horario as $clave => $hora):?>
                                                        <?php if ($j!=$num_dia-1 || $num_hora<$hora) :?>                        
                                                            <?php if(!consultalogin($pdo,$hora,$i,1)):?>
                                                                <option value='<?php echo '1'.'/'.$hora?>'> <?php echo $hora.':00 hs'?> </option>                          
                                                            <?php endif;?>
                                                        <?php endif;?>
                                                    <?php endforeach;?>
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
                            <?php endfor;?>  
                    </div>

                <div id="tabs-2">
                            <img class="cancha" src="alquileres/cancha5 2.jpg" alt="pp"/>
                            <?php for($i=0;$i<8;$i++):?>         
                            <?php 
                            $j=$i+$num_dia-1;
                            //echo $nombre_dias[$j%7]." ".calcularfecha($i);
                            $horario=$semana[$nombre_dias[$j%7]];

                            ?>
                            <label style="color:yellow;margin-left:8em"><?php echo $nombre_dias[$j%7]." ".calcularfecha($i);?></label>
                            <table class="alq">
                                <form name="formulario" method="post" action="funciones/alquiler/reserva_1.php">
                                <input type="hidden" value="<?php echo calcularfecha($i)?>" name="fecha"/>

                                <tr>
                                    <td class="alq">
                                            <fieldset>
                                                <label class= "option" for="localidad" style="font-size:23px">Horario:</br></br></label>
                                                <select name="turno" class="required">
                                                    <?php foreach($horario as $clave => $hora):?>
                                                        <?php if ($j!=$num_dia-1 || $num_hora<$hora) :?>                        
                                                            <?php if(!consultalogin($pdo,$hora,$i,2)):?>
                                                                <option value='<?php echo '2'.'/'.$hora?>'> <?php echo $hora.':00 hs'?> </option>                          
                                                            <?php endif;?>
                                                        <?php endif;?>
                                                    <?php endforeach;?>
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
                            <?php endfor;?>  
                    </div>


                 <div id="tabs-3">
                            <img class="cancha" src="alquileres/cancha8.jpg" alt="pp"/>
                            <?php for($i=0;$i<8;$i++):?>         
                            <?php 
                            $j=$i+$num_dia-1;
                            //echo $nombre_dias[$j%7]." ".calcularfecha($i);
                            $horario=$semana[$nombre_dias[$j%7]];

                            ?>
                            <label style="color:yellow;margin-left:8em"><?php echo $nombre_dias[$j%7]." ".calcularfecha($i);?></label>
                            <table class="alq">
                                <form name="formulario" method="post" action="funciones/alquiler/reserva_1.php">
                                <input type="hidden" value="<?php echo calcularfecha($i)?>" name="fecha"/>

                                <tr>
                                    <td class="alq">
                                            <fieldset>
                                                <label class= "option" for="localidad" style="font-size:23px">Horario:</br></br></label>
                                                <select name="turno" class="required">
                                                    <?php foreach($horario as $clave => $hora):?>
                                                        <?php if ($j!=$num_dia-1 || $num_hora<$hora) :?>                        
                                                            <?php if(!consultalogin($pdo,$hora,$i,3)):?>
                                                                <option value='<?php echo '3'.'/'.$hora?>'> <?php echo $hora.':00 hs'?> </option>                          
                                                            <?php endif;?>
                                                        <?php endif;?>
                                                    <?php endforeach;?>
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
                            <?php endfor;?>  
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
			
			<a href="http://www.tycsports.com/contenidos/home.html" >
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

