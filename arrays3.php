<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Máquina Escurabutxaques</title>
</head>
<body>

<?php
// Definimos las imágenes disponibles
$imagenes = ["pc", "pera", "naranja", "banca"];
$resultat = [];

// Generamos una combinación aleatoria
if (count($resultat) < 4) {
    $resultat[] = $imagenes[array_rand($imagenes)];
}
if (count($resultat) < 4) {
    $resultat[] = $imagenes[array_rand($imagenes)];
}
if (count($resultat) < 4) {
    $resultat[] = $imagenes[array_rand($imagenes)];
}
if (count($resultat) < 4) {
    $resultat[] = $imagenes[array_rand($imagenes)];
}

// Mostramos las imágenes generadas
if (isset($resultat[0])) {
    echo "<img src='img/{$resultat[0]}.png' alt='{$resultat[0]}' style='width:100px;height:100px;'> ";
}
if (isset($resultat[1])) {
    echo "<img src='img/{$resultat[1]}.png' alt='{$resultat[1]}' style='width:100px;height:100px;'> ";
}
if (isset($resultat[2])) {
    echo "<img src='img/{$resultat[2]}.png' alt='{$resultat[2]}' style='width:100px;height:100px;'> ";
}
if (isset($resultat[3])) {
    echo "<img src='img/{$resultat[3]}.png' alt='{$resultat[3]}' style='width:100px;height:100px;'> ";
}

// Contamos las ocurrencias de cada imagen
$contar = [
    "pc" => 0,
    "pera" => 0,
    "naranja" => 0,
    "banca" => 0
];

if ($resultat[0] === "pc") {
    $contar["pc"]++;
} elseif ($resultat[0] === "pera") {
    $contar["pera"]++;
} elseif ($resultat[0] === "naranja") {
    $contar["naranja"]++;
} elseif ($resultat[0] === "banca") {
    $contar["banca"]++;
}

if ($resultat[1] === "pc") {
    $contar["pc"]++;
} elseif ($resultat[1] === "pera") {
    $contar["pera"]++;
} elseif ($resultat[1] === "naranja") {
    $contar["naranja"]++;
} elseif ($resultat[1] === "banca") {
    $contar["banca"]++;
}

if ($resultat[2] === "pc") {
    $contar["pc"]++;
} elseif ($resultat[2] === "pera") {
    $contar["pera"]++;
} elseif ($resultat[2] === "naranja") {
    $contar["naranja"]++;
} elseif ($resultat[2] === "banca") {
    $contar["banca"]++;
}

if ($resultat[3] === "pc") {
    $contar["pc"]++;
} elseif ($resultat[3] === "pera") {
    $contar["pera"]++;
} elseif ($resultat[3] === "naranja") {
    $contar["naranja"]++;
} elseif ($resultat[3] === "banca") {
    $contar["banca"]++;
}

// Verificamos las combinaciones ganadoras
if ($contar["pc"] === 1 && $contar["pera"] === 3) {
    echo "<p>Premi peres!</p>";
} elseif ($contar["pc"] === 1 && $contar["naranja"] === 4) {
    echo "<p>Premi taronges!</p>";
} elseif ($contar["pc"] === 1 && $contar["banca"] === 4) {
    echo "<p>Premi banca!</p>";
} elseif ($contar["pc"] === 4) {
    echo "<p>Premi PHP!</p>";
} else {
    echo "<p>No hi ha premi aquesta vegada. Torna a intentar-ho!</p>";
}
?>
</body>
</html>
