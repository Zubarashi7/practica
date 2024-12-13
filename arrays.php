<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        "Dilluns" => "Seguridad y Alta Disponibilidad","Implantacion de Aplicaciones Web","Administracion de Sistemas Informarticos","Empresa e Iniciativa", 
        "Dimarts" => "Administracion de Sistemas Informarticos","Seguridad y Alta Disponibilidad","Tutoria","Implantacion de Aplicaciones Web",
        "Dimecres" => "Administracion de Sistemas Informaticos","Servicios de Red e Internet","Empresa e Iniciativa",
        "Dijuous" => "Seguridad y Alta Disponibilidad","Administracion de Sistemas Informaticos","Servicios de Red e Internet",
        "Divendres" => "Implantacion de Apliaciones Web","Administracion de Sistemas Informaticos","Sericios de Red e Internet"
    ];
    echo "Ejercicio 2";
    echo "<br>";
    echo "<br>";
    echo "El tercer element es: $horari[2]";
    echo "<br>";
    echo "<br>";

    //Ejercicio 3

    $professors = [
        "Carlos" => "Seguridad y Alta Disponibilidad",
        "David Escribano" => "Implantacion de Aplicaciones Web",
        "Jordi" => "Servicios de Red e Internet",
        "Susana" => "Gestion de Bases de Datos",
        "Jana" => "Empresa e Iniciativa",
        "Juanjo" => "Administracion de Sistemas Informaticos"
    ];

    echo "Ejercicio 3";
    echo "<br>";
    echo "<br>";
    print_r($professors);
    echo "<br>";
    echo "<br>";

    //Ejercicio 4

    ?>

    <header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="portafolio.php">Portafolio</a></li>
            <li><a href="arrays.php">Arrays</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </nav>
    </header>
</body>
</html>