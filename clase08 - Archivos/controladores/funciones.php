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
  if (isset($_FILES)){
    if($_FILES["archivo"]["error"]!=0){
      $errores["archivo"]="Error, debe subir imagen";
    }
    $nombre=$_FILES["archivo"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    if($ext != "png" && $ext != "jpg"){
      $errores["archivo"]="La imagen debe ser .png o .jpg";
    }
  }

  return $errores;
}
function inputUsuario($campo){
  if(isset($_POST[$campo])){
    return $_POST[$campo];
  }
}
function armarRegistro($datos, $imagen){
  $usuario=[
    "nombre"=>$datos["nombre"],
    "email"=>$datos["email"],
    "password"=> password_hash($datos["password"], PASSWORD_DEFAULT),
    "archivo"=>$imagen];
  return $usuario;
}
function armarArchivo($imagen){
  $nombre = $imagen["archivo"]["name"];
  $ext = pathinfo($nombre, PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["archivo"]["tmp_name"];
  $archivoDestino = dirname(__DIR__);
  $archivoDestino = $archivoDestino . "/avatar/";
  $archivoDestino = $archivoDestino . uniqid();
  $archivoDestino = $archivoDestino . "." . $ext;
  move_uploaded_file($archivoOrigen,$archivoDestino);
  return $archivoDestino;
}

function guardar($usuario){
  $jsusuario= json_encode($usuario);
  file_put_contents("usuarios.json",$jsusuario. PHP_EOL, FILE_APPEND);
}
// function guardarArchivo(){
//   if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
//     $nombre = $_FILES["archivo"]["name"];
//     $archivo = $_FILES["archivo"]["tmp_name"];
//     $ext = pathinfo($nombre, PATHINFO_EXTENSION);
//
//     $miArchivo = dirname(__FILE__);
//     $miArchivo = $miArchivo . "/archivos/";
//     $miArchivo = $miArchivo . "archivoNuevo". $ext;
//
//     move_upload_file($archive, $miArchivo);
//   }
// }
