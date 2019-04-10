<pre>
<?php

var_dump($_POST);

// echo "$_GET[nombre]"



foreach ($_POST as $key => $value) {
  if (is_array($key)) {
    foreach ($key as $hobbie => $valor) {
      echo "$hobbie : $valor"."<br>";
    }
  } else {
  echo "$key : $value"."<br>";
  }
}
echo "<br>";

echo "hobbies"."<br>";
foreach ($_POST["hobbies"] as $key => $value) {
  echo "$key : $value"."<br>";
}
echo "<br>";

foreach (getAllheaders() as $key => $value) {
  echo "$key : $value"."<br>";
}

?>
</pre>
