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
        <form  id="formulario" action="funciones/abmUsuarios/insertar.php" method="post" >
            User<br>
            <input type="text" name="user" id="user" minlength="4" class="required"/><br>
            Nombre<br>
            <input type="text" name="nombre" class="required"><br>
            Apellido<br>
            <input type="text" name="apellido" class="required"><br>
            
                        DNI<br>
            <input type="text" name="dni" class="required digits"><br>
                        Fecha Nacimiento<br>
            <input type="text" name="fechanac" id="cuenta" value= ""  class="required"/><br>
                        Direccion<br>
            <input type="text" name="direccion" ><br>
            <label class= "option" for="localidad">Localidad:</label>
               <select id="localidad"  name="localidad" class="required">
                       <option value="">Seleccione...</option>
                       <option value="1">Rawson</option>
                       <option value="2">Trelew</option>
                       <option value="3">P.Madryn</option>
               </select><br>
                        Telcel<br>
            <input type="text" name="telcel"><br>
                        Email<br>
            <input type="text" name="email" id="mail" class="required email"><br>
                        Password<br>
            <input type="password" name="password" class="required"><br>
            
 
            <input type="submit" value="ingresar">
        </form>
        <br>
        </td>
<td valign="top">     
    <font size="5"><u>Eliminar</u></font>
        <form id="formulario1" action="funciones/abmUsuarios/borra.php" method="post" >
            ID<br>
            <input type="text" name="id" id="user" class="required digits"><br>
            
           <input type="submit" value="ingresar">
        </form>
        <br>
        
</td>
<tr>
    <td valign="top">
        <font size="5"><u>Modificar</u></font>
            <form id="formulario2" action="funciones/abmUsuarios/modifica.php" method="post" >
                ID<br>
                <input type="text" name="id" id="user" class="required digits"><br>

               <input type="submit" value="modifica">
            </form>
            <br>
    </td>
</tr>
</tr>

</table>


