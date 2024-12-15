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
    /*echo "Ejercicio 1";
    echo "<br>";
    echo "<br>";
    echo "El tercer elemento es: $setmana[2]";
    echo "<br>";
    echo "<br>";
    print_r($setmana);
    echo "<br>";
    echo "<br>";
    */
    //Ejercicio 2

    $horari = [
        "Dilluns" => ["Seguridad y Alta Disponibilidad", "Implantacion de Aplicaciones Web", "Administracion de Sistemas Informaticos", "Empresa e Iniciativa"],
        "Dimarts" => ["Administracion de Sistemas Informaticos", "Seguridad y Alta Disponibilidad", "Tutoria", "Implantacion de Aplicaciones Web"],
        "Dimecres" => ["Administracion de Sistemas Informaticos", "Servicios de Red e Internet", "Empresa e Iniciativa"],
        "Dijous" => ["Seguridad y Alta Disponibilidad", "Administracion de Sistemas Informaticos", "Servicios de Red e Internet"],
        "Divendres" => ["Implantacion de Aplicaciones Web", "Administracion de Sistemas Informaticos", "Servicios de Red e Internet"]
    ];
    /*
    echo "Ejercicio 2";
    echo "<br><br>";
    echo "El tercer element es: " . implode(", ", $horari["Dimecres"]);
    echo "<br><br>";
    */
    //Ejercicio 3

    $professors = [
        "Carlos" => ["Seguridad y Alta Disponibilidad"],
        "David Escribano" => ["Implantacion de Aplicaciones Web"],
        "Jordi" => ["Servicios de Red e Internet"],
        "Susana" => ["Gestion de Bases de Datos"],
        "Jana" => ["Empresa e Iniciativa"],
        "Juanjo" => ["Administracion de Sistemas Informaticos"]
    ];
    /*
    echo "Ejercicio 3";
    echo "<br>";
    echo "<br>";
    print_r($professors);
    echo "<br>";
    echo "<br>";
    */
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