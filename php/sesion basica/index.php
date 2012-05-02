<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();   
        if (isset($_SESSION['usuario'])){
            echo "bienvenido usuario: ".$_SESSION['usuario'];
            echo " <a href=logout.php>cerrar sesion</a>";
        }
        else {
        ?>
        
        
        <h1>login</h1>
        
        <form action="comprobacion.php" method="post">
            usuario<br>
            <input type="text" name="usuario"><br>
            contraseña<br>
            <input type="password" name="pass"><br>
            <input type="submit" value="ingresar">
        </form>
        <?php
        if (isset($_SESSION['reingrese'])){
            echo $_SESSION['reingrese'];
            unset ($_SESSION['reingrese']);
        }
        elseif(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset ($_SESSION['error']);
        }
        }
        ?>
    </body>
</html>
