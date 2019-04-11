<?php
  include_once ("controladores/funciones.php");

  if ($_POST) {
    guardarSesion($_POST);
    if (isset($_POST["recordar"])) {
      guardarCookies($_POST);
    }
    header("location:menu.php");
    exit;
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="nombre">Nombre Completo</label>
      <input type="text" name="nombre" value="">
      <br>
      <label for="email">Correo Electronico</label>
      <input type="email" name="email" value="">
      <br>
      <label for="password">Contraseña</label>
      <input type="password" name="password" value="">
      <br>
      <label for="recordar">Recordar la contraseña</label>
      <input type="checkbox" name="recordar" value="">
      <br>
      <button type="submit" name="enviar">Enviar</button>
    </form>
  </body>
</html>
