</head>
  <body>
    <h2>
      <?php
        echo "Arrays Simples";
        echo "<br>";
        $sueldo = 12000;
        echo "Mi sueldo actual es $sueldo";
        $nombres = ["Herni","Facundo","Michelle"];
        $nombres[]="Mauro";
        $nombres[100]="Tomas";
        $nombres[]="Adriano";

        echo "<br>";
        echo "Array Asociativo";
        echo "<br>";
        $vehiculo=[
          "marca"=>"ford",
          "modelo"=>"Explorer",
          "color"=>"Gris"
        ];

        $vehiculo["Dominio"]="ARG1967DANI";

        $vehiculos=[
          "marcas"=>["Ford","Chevrolet","Fiat"],
          "modelos"=>["Explorer","Blazer","Uno"],
          "colores"=>["Gris","Arena","Azul"]
        ];
        echo "<br>";
        echo "Amigas y amigos mi carro es un ".$vehiculos["marcas"][0]." y el modelo es ".$vehiculos["modelos"][0];

      ?>
      <pre>
        <?php
          var_dump($vehiculos);
         ?>
      </pre>
