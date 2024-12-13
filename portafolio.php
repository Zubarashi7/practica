<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/portafolio.css">
    <title>Portafolio</title>

        <!---Script JavaScript---->
        <script>
            // La funcion "refrescarPagina()" usa el metodo "location.reload()", para recargar la pagina "actual".
            function reinicioLoteria() {
                location.reload();
            }
        </script>
        
<body>

    <?php
        //Generar numeros principales
        $numeros = []; //Iniciamos el array, lo hacemos vacio, donde almacenaremos los numeros aleatorios generados.

        //Bucle "while" para generar los numeros, seguira ejecutandose mientras la cantidad de elementos en el array "$numeros" sea menor que "6. Asi solo se generaran 6 numeros.
        //La funcion "count()" devuelve el numero de elementos en el array "$numeros", al principio es "0". Asi que el bucle sigue hasta que el array contenga 6 numeros.
        while (count($numeros) < 6){

            //Generacion de un numero aleatorio
            //La funcion "rand(1, 49)" retorna un numero entero al azar en sese rango.
            $numero = rand(1, 49);

            //Comprobacion
            //Verificar si el numero generado ya esta en el array "$numeros" mediante la funcion "in_array", esta funcion devuelve "true" si el valor de "$numero" ya existe en el array, y "false" si no.
            //El operador "!" niega el resultado de "in_array()", es decir, entra en el bloque "if" solo su el numero no esta en el array. Nos asegura que no haya duplicados.
            if (!in_array($numero, $numeros)) {

                //Agregar el numero al array
                $numeros[] = $numero;
            }
        }
        sort($numeros); //Ordenamos de menor a mayor

        //Generar numero complementario
        //Recuerda: El numero complementario no puede ser igual a los numeros principales.
        $complementario = rand(1, 49); //Lo mismo que antes, genera un numero entre 1 y 49, y se almacena en su varible definida.

        //Comprobamos si el nuemro generado ya existe en el array "$numeros", osea de los 6 numeros principales.
        //La funcion "in_array", devolvera "true" si este numero ya existe en el array, y "false" si no.
        //Entonces si sale "true" el bucle generara otro numero hasta que este en "false" o no se repita el numero.
        while (in_array($complementario, $numeros)) {
            $complementario = rand(1, 49); //Genera un numero aleatorio
        }#454c4e

        //Generar el reintegro
        $reintegro = rand(0, 9);

        //Salida
        //Una forma mas de poder concatenar salidas o a una variable 😉
        $output = "<p> Combintació aleatòria: </p>" . implode(", ", $numeros) . "<br>"; // "implode" convierte el array "$numeros" en una cadena de texto.
        $output .= "<p> Complementari: $complementario </p>";
        $output .= "<p> Reintegrament: $reintegro </p>";

        /*
        Fuentes:
        Array:    https://www.php.net/manual/en/language.types.array.php
        In_Array: https://www.php.net/manual/en/function.in-array.php
        While:    https://www.php.net/manual/en/control-structures.while.php
        Count:    https://www.php.net/manual/en/function.count.php
                  https://www.w3schools.com/php/func_array_count.asp
        Rand:     https://www.php.net/manual/es/function.rand.php
        Sort:     https://www.php.net/manual/en/function.sort.php
        Implode:  https://www.php.net/manual/en/function.implode.php
        */

        //La quiniela
        //Mediante un bucle crear un listado de partidos, mostrar un pronostico como "1" "X" "2"

        $pronosticos = ["1","X","2"]; //Tres posibles pronosticos de un resultado

        $partidos = [];
        for ($p=0;$p<15;$p++){
            $resultado = rand(0,2);
            $partidos[] = $pronosticos[$resultado];
        }

        //var_dump($partidos);

        //Creamos un array con la combinacion goandora de la quiniela

        $combinacion_ganadora = ["1","2","X","1","2","X","1","2","X","1","2","X","1","2","X"];

        //Comprobacion de aciertos

        $aciertos = 0;
        for ($p=0;$p<15;$p++){
            if($partidos[$p] == $combinacion_ganadora[$p]) {
                $aciertos++;
            }
        }

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
    <main>
        <h1>Loteria. La bruixeta de la sort</h1>

        <h2>GENERADOR DE NÚMEROS ALEATORIS</h2>
        <p>Utilitze el nostre generador de números aleatoris per obtindre la combinació guanyadora a les seues apostes de La Primitiva.</p>
        <p>Sols té que recarregar la web si vol obtindré altra combinació. Molta sort</p>

        <?=
            $output
        ?>

        <button onclick="reinicioLoteria()">Reinicio</button>

        <h1>La Quiniela</h1>
        <p>Utilitza el nostre generador de combinacions per obtindre els teus pronòstics de La Quiniela.</p>
        <table width="400px" border="1">
            <tr>
                <td>Partido</td>
                <td>Pronostico</td>
                <td>Ganadora</td>
                <td>Aciertos</td>
            </tr>

            <?php for ($p=0;$p<15;$p++){?>
                <tr>
                    <td>Equipo Casa - Equipo Fuera</td>
                    <td><?= $partidos[$p]?></td>
                    <td><?= $combinacion_ganadora[$p]?></td>

                    <?php if ($partidos[$p] == $combinacion_ganadora[$p]) {?>
                        <td bgcolor="Green">Acierto</td>
                    <?php } else { ?>
                        <td bgcolor="Red">Fallo</td>
                    <?php } ?>

             <?php } ?>

                </tr>

        </table>

        <p>Numero de aciertos: <?= $aciertos ?> </p>

        <button onclick="reinicioLoteria()">Reinicio</button>


    </main>
    <footer>
        <p>&copy Derechos reservados por Marcelo 😉</p>
    </footer>
</body>
</html>