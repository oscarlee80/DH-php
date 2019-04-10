<?php
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";
}
function validar($datos){
  $errores=[];
  $nombre=trim($datos["nombre"]);
  if (empty($nombre)) {
    $errores["nombre"]= "El campo nombre no puede estar en blanco";
  }
  $email=trim($datos["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores["email"]="El e-mail debe tener un formato usuario@algo.com";
  }
  $password=trim($datos["password"]);
  $repassword=trim($datos["repassword"]);
  if (empty($password)){
    $errores["password"]="El campo de la contraseña no debe de estar en blanco";
  } elseif (strlen($password)<6) {
    $errores["password"]="La contraseña debe tener como minimo 6 caracteres";
  } elseif ($password != $repassword) {
    $errores["repassword"]="Las contraseñas no coinciden";
  }
  return $errores;
}
function inputUsuario($campo){
  if(isset($_POST[$campo])){
    return $_POST[$campo];
  }
}
function armarRegistro($datos){
  $usuario=[
    "nombre"=>$datos["nombre"],
    "email"=>$datos["email"],
    "password"=> password_hash($datos["password"], PASSWORD_DEFAULT)
  ];
  return $usuario;
}
function guardar($usuario){
  $jsusuario= json_encode($usuario);
  file_put_contents("usuarios.json",$jsusuario. PHP_EOL, FILE_APPEND);
}
