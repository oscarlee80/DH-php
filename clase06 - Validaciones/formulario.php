
<!-- <?php
  $alumnos = ["Seleccione al alumno","Nati","Pau","Hernan","Alejandro","Francisco","Mia","Facundo"];
  for ($i=0; $i < count($alumnos) ; $i++) {
    echo "$alumnos[$i]<br>";
  }
  echo "<hr>";

  echo "<ul>";
    foreach ($alumnos as $key => $value) {
      echo "<li> $value </li>";
    }
  echo "</ul>";

  echo "<hr>";
  foreach ($alumnos as $key => $value) {
    echo "$key : $value<br>";
  }
  echo "<hr>";

    echo "<select>";
    foreach ($alumnos as $key => $value) {
      echo "<option value=$key>$value</option>";
    }
    echo "</select>";

  echo "<hr>";
  $ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Curso" =>"TN02",
    "Curso1" =>"TT03",
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"],
    "Venezuela" => ["Caracas","Valle de la Pascua","Lara","Carabobo"]
  ];
  foreach ($ceu as $pais => $ciudad) {
    if (!is_array($ciudad)) {
      echo "<h3><hr>$pais : $ciudad</h3>";
    } else {
      echo "<h3><hr>$pais</h3>";
      foreach ($ciudad as $key => $value) {
        echo "$key : $value<br>";
      }
    }
  }
  echo "<hr>";


?> -->

<?php
include_once("controllers/functions.php");

  if($_POST){
    $errores=validar($_POST);
  }
  if (count($errores==0)) {
    $registro=armarRegistro($_POST);
  }
  guardar($registro);
  header("location:login.php");
  exit;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="master.css">
  <title>Ejemplo formulario</title>
</head>

<body>
  <div class="container">
    <ul>
      <?php
        if (isset($errores)) {
          foreach ($errores as $key => $value) :?>
            <li><?=$value;?></li>
          <?php endforeach;
        }
      ?>
    </ul>
    <section class="row  text-center ">
      <article class="col-12  " >
          <legend>
            <h2>Formulario de registro de datos</h2>
          </legend>
          <form action="" method="POST"  >
            <!--<label DNI:</label>-->
            <br>
            <input name="dni" type="text" id="dni"  placeholder="Coloque aquí su DNI" />
            <br>
            <!--<label>Nombre:</label>-->
            <br>
            <input name="nombre" type="text" id="nombre"  placeholder="Coloque aquí su nombre"/>
            <br>
            <!--<label>Apellido:</label>-->
            <br>
            <input name="apellido" type="text" id="apellido" placeholder="Coloque aquí su apellido" />
            <br>

              <legend>Indique Genero:</legend>

              <input type="radio" name="sexo" id="sexo1" value="Masculino">
              <label for="sexo1">Masculino</label>


              <input type="radio" name="sexo" id="sexo2" value="Femenino">
              <label for="sexo2">Femenino</label>


              <input type="radio" name="sexo" id="sexo3" value="Otro">
              <label for="sexo3">Otro</label>


            <br>

              <legend>Seleccione la educación culminada:</legend>

              <input type="checkbox" id="check1" name="educacion[]" value="Primaria">
              <label for="check1">Primaria </label>
              <br>

              <input  type="checkbox" id="check2" name="educacion[]" value="Secundaria">
              <label for="check2">Secundaria </label>
              <br>

              <input  type="checkbox" id="check3" name="educacion[]" value="Universitaria">
              <label for="check3">Universitaria</label>
              <br>

              <input type="checkbox" id="check4"  name="educacion[]" value="Postgrado">
              <label for="check4">Postgrado </label>
              <br>
              <legend>Departamento en el cual labora.</legend>
              <br>
              <select name="departamento">
                <option selected>Seleccione Departamento</option>
                <option value="1">Sistemas</option>
                <option value="2">Recursos Humanos</option>
                <option value="3">Contabilidad</option>
                <option value="3">Compras</option>
                <option value="3">Finanzas</option>
              </select>

            <br>
            <br>
            <label>Observaciones</label>
            <br>
            <textarea id="textarea" name="observaciones" id="vaciones" cols="50"></textarea>
            <br><br>
            <button class="btn-buttom btn-primary" type="submit">Enviar</button>
            <button  class="btn-buttom btn-success" type="reset">Restablecer</button>
          </form>

      </article>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
