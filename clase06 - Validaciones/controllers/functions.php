<?php
  function dd($valor){
    echo "<pre>";
      var_dump($valor);
      exit;
    echo "</pre>";
  }
  function validar($datos){
    $errores=[];
    if($datos["dni"]==""){
      $errores["dni"]="Capo no puedes dejar este campo vacio.";
    }
    return $errores;
  }

  function armarRegistro($datos){
    $registro=[
      "name"=>$_POST["nombre"];
    ]
    return $registro;
  }
  function guardar($datos){
    $jsdatos=json_encode($datos);
    file_put_content($jsdatos.json,)
  }
