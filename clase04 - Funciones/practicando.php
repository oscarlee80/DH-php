<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>
    <?php
      $alumnos = ["Herni","Matias","Karen","Alejandro"];
      for ($i=0; $i < count($alumnos) ; $i++) {
        echo $alumnos[$i]."<br>";
      }
      $moto=[
        "marca"=>"Honda",
        "modelo"=>"CBR",
        "color"=>"Azul",
        "anio"=>1932
      ];
      echo "<hr>";
      foreach ($moto as $key => $value) {
        echo "$key : $value"."<br>";
      }
    ?>
    <hr>
    <ul>
      <?php
        for ($i=0; $i < count($alumnos) ; $i++) { ?>
          <li><?php echo "$alumnos[$i]"; ?></li>
        <?php }
      ?>
    </ul>
      <hr>
      <?php
      $valor1 = 50;
        function sumar($valor2){
          global $valor1;
          return $valor1+$valor2;
        }
        $resultado = sumar(2);
        echo "La sumatoria es de $resultado";
      ?>
      <hr>
      <?php
        $dias = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
        $dia = rand(0,7);
        switch ($dia) {
          case 0:
            echo "$dias[$dia]";
            break;
          case 1:
            echo "$dias[$dia]";
            break;
          case 2:
            echo "$dias[$dia]";
            break;
          case 3:
            echo "$dias[$dia]";
            break;
          case 4:
            echo "$dias[$dia]";
            break;
          case 5:
            echo "$dias[$dia]";
            break;
          case 6:
            echo "$dias[$dia]";
            break;

          default:
            echo "Debe indicar un valor entre 1 a 7";
            break;
        }

      ?>

  </body>
</html>
