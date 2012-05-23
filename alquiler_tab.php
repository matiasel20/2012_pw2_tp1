 <?php if(!isset($_SESSION['usuario'])):?>          
                                <label style="color:#8D0202">Usuario no identificado</label><br>
                             <?php else:?>
                                    <br><a href="funciones/alquiler/mostrarReservas.php" >ver reservas realizadas</a><br>
                                    
                           
                                    
                                
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
                                                            <?php if(!consultalogin($pdo,$hora,$i,$c)):?>
                                                                <option value='<?php echo $c.'/'.$hora?>'> <?php echo $hora.':00 hs'?> </option>                          
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
                            <?php endif;?>