<?php
  session_start();
  function guardarSesion($usuario) {
    $_SESSION["nombre"]=$usuario["nombre"];
  }

  function guardarCookies($usuario) {
    setcookie("password",$usuario["password"],time() + 10);
    }
