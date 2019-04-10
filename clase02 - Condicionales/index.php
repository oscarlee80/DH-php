<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>
    <h1>Practicando PHP - Clase 02</h1>
    <h2>
      <?php
        $nom = "Gloria";
        $estadoCivil = "Soltera";
        if($estadoCivil== "Casada"){
          echo "Amiga $nombre usted es $estadoCivil";
        } else {
          echo "Amiga $nombre que bueno que usted aun esta $estadoCivil";
        }
        echo "<hr>";

        $a=10;
        $b=20;
        $resultado=($a>$b)?$a:$b;
        echo $resultado;
        echo "<hr>";
      ?>
    </h2>

      <h3>
      <?php
        $dni = "28324567";
        $nombre = "Oscar";
        $sueldo = "10000";
        $aumento = ($sueldo<12000)?30:15;

        echo "Estimado $nombre, portador del DNI $dni, usted tiene un aumento del $aumento% y su nuevo sueldo es de $".(($aumento*$sueldo/100)+$sueldo);
      ?>
      </h3>
  </body>
</html>
