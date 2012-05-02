<?php

       function hola(&$who){
            $who++;
            echo "hola ".$who." verdes";
        }
?>
<h1>bienvenido admin</h1>
<p>ingrese su consulta sql</p>
        <form action="pconsulta.php" method="post">
            consulta
           <input type="text" name="consulta"></input>
            
            
            <input type="submit" value="confirmar"></input>
        </form>
