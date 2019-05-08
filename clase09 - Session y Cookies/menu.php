<?php
  include_once ("controladores/funciones.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MENU</title>
  </head>
  <body>
    <?php echo "Bienvenido " . $_SESSION["nombre"] . "!";?>
    <hr>
    <?php if (isset($_COOKIE["password"])) {
      echo "Tu contraseña ha sido recordada";
    } ?>
    <br>
    <a href="controladores/logout.php">LOGOUT</a>

  </body>
</html>
