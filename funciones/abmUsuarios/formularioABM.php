<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("funciones/abmUsuarios/mostrarTabla.php")
?>




<table border="1">
<tr>
<td valign="top">
    <h1 style="font-size: 10">inserta</h1>
        <form action="insertar.php" method="post">
            user<br>
            <input type="text" name="user" ><br>
            nombre<br>
            <input type="text" name="nombre"><br>
            apellido<br>
            <input type="text" name="apellido"><br>
            
                        dni<br>
            <input type="text" name="dni"><br>
                        fechanac<br>
            <input type="text" name="fechanac"><br>
                        direccion<br>
            <input type="text" name="direccion"><br>
                        localidad<br>
            <input type="text" name="localidad"><br>
                        telcel<br>
            <input type="text" name="telcel"><br>
                        email<br>
            <input type="text" name="email"><br>
                        password<br>
            <input type="password" name="password"><br>
            
 
            <input type="submit" value="ingresar">
        </form>
        <br>
        </td>
<td valign="top">     
		<h1>borra</h1>
        <form action="borra.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="borrar">
        </form>
        <br>
        
</td>
<td valign="top">
		<h1>modifica</h1>
        <form action="modifica.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="modifica">
        </form>
        <br>
</td>
</tr>

</table>


