<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("funciones/abmProductos/mostrarTablaP.php")
?>




<table border="1" style="color: white" >
<tr>
    <td valign="top" rowspan="2">
    
    <font size="5"><u>Insertar</u></font>
        <form action="funciones/abmProductos/insertarP.php" method="post">
            Codigo<br>
            <input type="text" name="codigo" ><br>

                        Descripcion<br>
            <input type="text" name="descripcion" ><br>
            
                        Modelo<br>
            <input type="text" name="modelo" ><br>
            
                        Tamanio<br>
            <input type="text" name="tamanio" ><br>
            
                        Precio<br>
            <input type="text" name="precio" ><br>
 
                        Stock<br>
            <input type="text" name="stock" ><br>

                        Categoria<br>
            <input type="text" name="categoriaid" ><br>
            
            <input type="submit" value="ingresar">
        </form>
        <br>
        </td>


  <td valign="top">     
   
      <font size="5"><u>Eliminar</u></font>
        <form action="funciones/abmProductos/borraP.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="borrar">
        </form>
        <br>
  </td>
  <tr>
      <td valign="top">
    <font size="5"><u>Modificar</u></font> 
        <form action="funciones/abmProductos/modificaP.php" method="post">
            ID<br>
            <input type="text" name="id"><br>
            
           <input type="submit" value="modifica">
        </form>


    </td>
    </tr>
</table>


