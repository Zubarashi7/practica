<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pràctica 4.4 Arrays</title>
</head>
<body>
    <?php
    // 1. comprobacion array
    $setmana = ["dilluns", "dimarts", "dimecres", "dijous", "divendres", "dissabte", "diumenge"];
    if (is_array($setmana)) {
        echo "1. setmana és un array";
    } else {
        echo "1. setmana no és un array";
    }
    echo "<hr>";

    // 2. numeros impaares 23-55
    $imparells = range(23, 55, 2);
    echo "2. Números imparells entre 23 i 55:<br>";
    print_r($imparells);
    echo "<hr>";

    // 3. numeros pares 56-100
    $parells = count(range(56, 100, 2));
    echo "3. Hi ha $parells números parells entre 56 i 100";
    echo "<hr>";

    // 4. 
    $alumnes = [
        ["nom" => "Marcelo", "edat" => 20],
        ["nom" => "Santiago", "edat" => 22],
        ["nom" => "Arnau", "edat" => 23],
        ["nom" => "Jorge", "edat" => 21],
        ["nom" => "Pau", "edat" => 20],
        ["nom" => "Pablo", "edat" => 24],
        ["nom" => "SanJuan", "edat" => 25],
        ["nom" => "Vinivio", "edat" => 22],
        ["nom" => "Sara", "edat" => 23]
    ];
    echo "4. Base de dades d'alumnes:<br>";
    print_r($alumnes);
    echo "<hr>";

    // 5. Comptar alumnes amb edats 21, 22 i 23
    $edats = array_column($alumnes, "edat");
    $comptar = array_count_values($edats);
    echo "5. Comptar alumnes per edat:<br>";
    echo "Tenim " . ($comptar[21] ?? 0) . " alumnes amb 21 anys a classe<br>";
    echo "Tenim " . ($comptar[22] ?? 0) . " alumnes amb 22 anys a classe<br>";
    echo "Tenim " . ($comptar[23] ?? 0) . " alumnes amb 23 anys a classe<br>";
    echo "<hr>";

    // 6. Trobar l'edat més major de la classe
    $edat_major = max($edats);
    echo "6. L'edat més major de la classe és $edat_major";
    echo "<hr>";

    // 7. Trobar l'edat més jove de la classe
    $edat_jove = min($edats);
    echo "7. L'edat més jove de la classe és $edat_jove";
    echo "<hr>";

    // 8. Reordenar alumnes de menor a major edat i mostrar
    usort($alumnes, fn($a, $b) => $a["edat"] <=> $b["edat"]);
    echo "8. Alumnes ordenats de menor a major edat:<br>";
    print_r($alumnes);
    echo "<hr>";

    // 9. Reordenar alumnes de major a menor edat i mostrar
    usort($alumnes, fn($a, $b) => $b["edat"] <=> $a["edat"]);
    echo "9. Alumnes ordenats de major a menor edat:<br>";
    print_r($alumnes);
    echo "<hr>";

    // 10. Reordenar array setmana alfabèticament i mostrar
    sort($setmana);
    echo "10. Dies de la setmana ordenats alfabèticament:<br>";
    print_r($setmana);
    echo "<hr>";

    // 11. Buscar si existeix algun alumne amb l'edat 22 o "22"
    $trobat_22 = in_array(22, $edats) ? "Sí, existeix algun alumne amb l'edat 22" : "No existeix cap alumne amb l'edat 22";
    $trobat_22_str = in_array("22", $edats, true) ? "Sí, existeix algun alumne amb l'edat '22'" : "No existeix cap alumne amb l'edat '22'";
    echo "11. Buscar l'edat 22 i \"22\":<br>";
    echo $trobat_22 . "<br>" . $trobat_22_str;
    echo "<hr>";
    ?>
</body>
</html>
