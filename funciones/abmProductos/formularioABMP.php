<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("funciones/abmProductos/mostrarTablaP.php")
?>




<table border="1">
<tr>
<td valign="top">
<h1>inserta</h1>
        <form action="insertarP.php" method="post">
            codigo<br>
            <input type="text" name="codigo" ><br>

                        Descripcion<br>
            <input type="text" name="descripcion" ><br>
            
                        modelo<br>
            <input type="text" name="modelo" ><br>
            
                        tamanio<br>
            <input type="text" name="tamanio" ><br>
            
                        precio<br>
            <input type="text" name="precio" ><br>
 
                        stock<br>
            <input type="text" name="stock" ><br>
            
            <input type="submit" value="ingresar">
        </form>
        <br>
        </td>
<td valign="top">     
		<h1>borra</h1>
        <form action="borraP.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="borrar">
        </form>
        <br>
        
</td>
<td valign="top">
		<h1>modifica</h1>
        <form action="modificaP.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="modifica">
        </form>
        <br>
</td>
</tr>

</table>


