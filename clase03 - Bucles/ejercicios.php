<?php
echo "<h2>Ejercicio 1</h2>";
for ($i=0; $i < 11; $i++) {
  echo "2 x $i = ".($i*2)."<br>";
}
echo "<hr>";
echo "<h2>Ejercicio 2</h2>";
$contador=1;
while ($contador <= 5) {
  echo ($contador*2)."<br>";
  $contador++;
}
echo "<hr>";
echo "<h2>Ejercicio 3</h2>";
$veces=0;
do {
  $a=rand(0,1);
  $veces++;
} while ($a != 1);
echo $veces;
echo "<hr>";
echo "<h2>Ejercicio 4</h2>";
$nombres=[Liam,Joaco,Nico,Isa,Emi];
echo "<h3>For</h3>";
for ($i=0; $i < count($nombres) ; $i++) {
  echo "$nombres[$i]<br>";
}
echo "<h3>While</h3>";
$a=0;
while ($a < 5) {
  echo "$nombres[$a]<br>";
  $a++;
}
$b=0;
echo "<h3>Do While</h3>";
do {
  echo "$nombres[$b]<br>";
  $b++;
} while ($b < 5);
echo "<h3>Foreach</h3>";
foreach ($nombres as $key => $value) {
  echo "$value<br>";
}
echo "<hr>";
echo "<h2>Ejercicio 5</h2>";
$random=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),];
echo "<h3>For</h3>";
for ($i=0; $i < count($random); $i++) {
  if ($random[$i]=5) {
  echo "El numero es 5!<br>";
} else {
  echo $random[$i]."<br>";
}
}
