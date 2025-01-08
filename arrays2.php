<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
<main>
    <?=
    $output1

    $output2

    $output3

    $output4

    $output5

    $output6

    $output7

    $output8

    $output9

    $output10

    $output11
    ?>
</main>
</body>
</html>