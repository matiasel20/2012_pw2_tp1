<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("funciones/abmUsuarios/mostrarTabla.php")
?>




<table border="1" style="color: white" >
<tr>
    <td valign="top" rowspan="2">
    <font size="5"><u>Insertar</u></font>
        <form action="funciones/abmUsuarios/insertar.php" method="post">
            User<br>
            <input type="text" name="user" ><br>
            Nombre<br>
            <input type="text" name="nombre"><br>
            Apellido<br>
            <input type="text" name="apellido"><br>
            
                        Dni<br>
            <input type="text" name="dni" class="required"><br>
                        Fechanac<br>
            <input type="text" name="fechanac"><br>
                        Direccion<br>
            <input type="text" name="direccion"><br>
                        Localidad<br>
            <input type="text" name="localidad"><br>
                        Telcel<br>
            <input type="text" name="telcel"><br>
                        Email<br>
            <input type="text" name="mail" id="mail" class="required email"><br>
                        Password<br>
            <input type="password" name="password"><br>
            
 
            <input type="submit" value="ingresar">
        </form>
        <br>
        </td>
<td valign="bottom">     
    <font size="5"><u>Eliminar</u></font>
        <form action="funciones/abmUsuarios/borra.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="borrar">
        </form>
        <br>
        
</td>
<tr>
    <td valign="bottom">
        <font size="5"><u>Modificar</u></font>
            <form action="funciones/abmUsuarios/modifica.php" method="post">
                ID<br>
                <input type="text" name="id"><br>

               <input type="submit" value="modifica">
            </form>
            <br>
    </td>
</tr>
</tr>

</table>


