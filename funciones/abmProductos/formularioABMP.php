<?php



include("funciones/abmProductos/mostrarTablaP.php");
include("funciones/compra/sacacategoria.php");

$cats=sacacat();

?>




<table border="1" style="color: white" >
<tr>
    <td valign="top" rowspan="2">
    
    <font size="5"><u>Insertar</u></font>
        <form id="formulario5"action="funciones/abmProductos/insertarP.php" method="post">
            Codigo<br>
            <input type="text" name="codigo" class="required"><br>

                        Descripcion<br>
            <input type="text" name="descripcion" class="required"><br>
            
                        Modelo<br>
            <input type="text" name="modelo" class="required"><br>
            
                        Tamanio<br>
            <input type="text" name="tamanio" class="required"><br>
            
                        Precio<br>
            <input type="text" name="precio" class="required"><br>
 
                        Stock<br>
            <input type="text" name="stock" class="required"><br>

            <label class= "option" for="categoriaid">Categoria:</label>
               <select id="categoriaid"  name="categoriaid" class="required">
                       <option >Seleccione...</option>
                          <?php foreach($cats as $fila):?>
                       <option value=<?php echo $fila['idcategoria'];?>><?php echo $fila['nombre'];?></option>

                          <?php endforeach; ?>
               </select><br>
            
            <input type="submit" value="ingresar">
        </form>
        <br>
        </td>


  <td valign="top">     
   
      <font size="5"><u>Eliminar</u></font>
        <form id="formulario4"action="funciones/abmProductos/borraP.php" method="post">
            ID<br>
            <input type="text" name="id" class="required"><br>
            
           <input type="submit" value="borrar">
        </form>
        <br>
  </td>
  <tr>
      <td valign="top">
    <font size="5"><u>Modificar</u></font> 
        <form id="formulario3" action="funciones/abmProductos/modificaP.php" method="post">
            ID<br>
            <input type="text" name="id" class="required"><br>
            
           <input type="submit" value="modifica">
        </form>


    </td>
    </tr>
</table>


