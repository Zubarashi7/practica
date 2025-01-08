<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/arrays.css">
    <title>Arrays</title>
</head>
<body>
    <?php

    //Ejercicio 1   
    $setmana = ["Dilluns","Dimarts","Dimecres","Dijuous","Divendres","Dissalete","Diumenges"];
    echo "Ejercicio 1";
    echo "<br>";
    echo "<br>";
    echo "El tercer elemento es: $setmana[2]";
    echo "<br>";
    echo "<br>";
    print_r($setmana);
    echo "<br>";
    echo "<br>";
    //Ejercicio 2

    $horari = [
        "Dilluns" => ["Seguridad y Alta Disponibilidad", "Implantacion de Aplicaciones Web", "Administracion de Sistemas Informaticos", "Empresa e Iniciativa"],
        "Dimarts" => ["Administracion de Sistemas Informaticos", "Seguridad y Alta Disponibilidad", "Tutoria", "Implantacion de Aplicaciones Web"],
        "Dimecres" => ["Administracion de Sistemas Informaticos", "Servicios de Red e Internet", "Empresa e Iniciativa"],
        "Dijous" => ["Seguridad y Alta Disponibilidad", "Administracion de Sistemas Informaticos", "Servicios de Red e Internet"],
        "Divendres" => ["Implantacion de Aplicaciones Web", "Administracion de Sistemas Informaticos", "Servicios de Red e Internet"]
    ];
    echo "Ejercicio 2";
    echo "<br><br>";
    echo "El tercer element es: " . implode(", ", $horari["Dimecres"]);
    echo "<br><br>";
    //Ejercicio 3

    $professors = [
        "Carlos" => ["Seguridad y Alta Disponibilidad"],
        "David Escribano" => ["Implantacion de Aplicaciones Web"],
        "Jordi" => ["Servicios de Red e Internet"],
        "Susana" => ["Gestion de Bases de Datos"],
        "Jana" => ["Empresa e Iniciativa"],
        "Juanjo" => ["Administracion de Sistemas Informaticos"]
    ];
    echo "Ejercicio 3";
    echo "<br>";
    echo "<br>";
    print_r($professors);
    echo "<br>";
    echo "<br>";
    //Ejercicio 4

    $cistelles = [
        [
            "nom" => "Lote de Navidad 5 selección de dulces, embutido, queso, conservas, cava, vino y whisky",
            "preu" => "AGOTADO",
            "imatge" => "img/1.avif"
        ],

        [
            "nom" => "Caja jamonera 6 Selección Estrella de la Navidad con paleta de cebo ibérica 50% raza ibérica Ibéricos Benito",
            "preu" => "185 €",
            "imatge" => "img/2.avif"
        ],

        [
            "nom" => "Cesta de mimbre 2 Mafresa, El Mesías, Inés Rosales, Destapa la Huerta, López de Haro y Perelada",
            "preu" => "144 €",
            "imatge" => "img/3.avif"
        ],

        [
            "nom" => "Estuche Champagne Moët & Chandon",
            "preu" => "175 €",
            "imatge" => "img/4.webp"
        ],
    ];

    $output4 = "";
    foreach ($cistelles as $cistella) {
        $output4 .= "<div class=cistella>";
        $output4 .= "<h3>{$cistella['nom']}</h3>";
        $output4 .= "<img src='{$cistella['imatge']}' >";
        $output4 .= "<p>{$cistella['preu']}</p>";
        $output4 .= "</div>";
    }

 // Ejercicio 1: Comprovar si setmana és un array
 $setmana = ["dilluns", "dimarts", "dimecres", "dijous", "divendres", "dissabte", "diumenge"];
 $output1 = is_array($setmana) ? "setmana és un array" : "setmana no és un array";
 
 // Ejercicio 2: Crear un array amb els números imparells entre 23 i 55
 $imparells = [];
 for ($i = 23; $i <= 55; $i += 2) {
     $imparells[] = $i;
 }
 $output2 = "Números imparells entre 23 i 55: " . implode(", ", $imparells);
 
 // Ejercicio 3: Quants números parells hi han entre 56 i 100
 $parells = 0;
 for ($i = 56; $i <= 100; $i++) {
     if ($i % 2 === 0) {
         $parells++;
     }
 }
 $output3 = "Hi han $parells números parells entre 56 i 100";
 
 // Ejercicio 4: Crear un array amb l’edat de cada alumne de la classe
 $edats = [20, 21, 22, 23, 21, 22, 23, 20, 23];
 $output4 = "Edats dels alumnes: " . implode(", ", $edats);
 
 // Ejercicio 5: Alumnes amb 21, 22 i 23 anys
 $edat_counts = array_count_values($edats);
 $output5 = "";
 foreach ([21, 22, 23] as $edat) {
     $count = $edat_counts[$edat] ?? 0;
     $output5 .= "Tenim $count alumnes amb $edat anys a classe.<br>";
 }
 
 // Ejercicio 6: Edat del més major de la classe
 $max_edat = max($edats);
 $output6 = "El més major té $max_edat anys";
 
 // Ejercicio 7: Edat del més jove de la classe
 $min_edat = min($edats);
 $output7 = "El més jove té $min_edat anys";
 
 // Ejercicio 8: Reordenar edats de menor a major
 $edats_asc = $edats;
 sort($edats_asc);
 $output8 = "Edats de menor a major: " . implode(", ", $edats_asc);
 
 // Ejercicio 9: Reordenar edats de major a menor
 $edats_desc = $edats;
 rsort($edats_desc);
 $output9 = "Edats de major a menor: " . implode(", ", $edats_desc);
 
 // Ejercicio 10: Reordenar setmana alfabèticament
 $setmana_sorted = $setmana;
 sort($setmana_sorted);
 $output10 = "Setmana ordenada alfabèticament: " . implode(", ", $setmana_sorted);
 
 // Ejercicio 11: Buscar edat 22 i "22" a l’array d’edats
 $output11 = "";
 $output11 .= in_array(22, $edats) ? "L'edat 22 es troba en l'array d’edats.<br>" : "L'edat 22 no es troba en l'array d’edats.<br>";
 $output11 .= in_array("22", $edats, true) ? "L'edat \"22\" es troba en l'array d’edats (comparació estricta)." : "L'edat \"22\" no es troba en l'array d’edats (comparació estricta).";

    ?>

    <header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portafolio.php">Portafolio</a></li>
            <li><a href="arrays.php">Arrays</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <h1>Cestas de navidad</h1>
        <img src="img/banner.avif" alt="Cestas de navidad">
    </main>
    <article>

        <?=
            $output4
        ?>
    </article>
    <footer>
        <p>&copy Derechos reservados por Marcelo 😉</p>
    </footer>
</body>
</html>