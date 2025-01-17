<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sri = rand(1, 10);
        $aso = rand(1, 10);
        $iaw = rand(1, 10);
    ?>

    <form action="notes.php" method="post">
        <p>Nom <input type="text" name="nombre" placeholder="Marcelo"></p>
        <p>Cognom <input type="text" name="apellido" placeholder="Casas"></p>
        <p>IAW <input type="text" name="IAW" value="<?php echo $iaw?>" readonly> </p>
        <p>ASO <input type="text" name="ASO" value="<?php echo $aso?>" readonly> </p>
        <p>SRI <input type="text" name="SRI" value="<?php echo $sri?>" readonly> </p>
        <p><input type="submit"></p>
</body>
</html>