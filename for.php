<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1. Guardar los datos en una array.
        print"<h3>Ejercicio 1</h3>";

        $datos = [12, 15, 2, 5, -9, 98, 65, 4, 8, 79, 6, 8, 6];
        print_r ($datos);

        print"<hr>";
        //2.Utilizar un bucle "for" para la suma de todos los elementos.

        print"<h3>Ejercicio 2</h3>";
        $suma = 0; //Variable para contener el total
        for($i = 0; $i < count($datos); $i++){
            $suma += $datos[$i];
        }

        print"La suma es: $suma<br>";

        print"<hr>";

        //3.
        print"<h3>Ejercicio 3</h3>";
        $media = $suma / count($datos); //Dividimos la suma total por el numero de elementos del array

        print"La media es: $media<br>";

        print"<hr>";

        //4. Encontrar el maximo y el minimo
        print"<h3>Ejercicio 4</h3>";
        //Se inicia con ambas variables con el primer valor del array.
        $maximo = $datos[0];
        $minimo = $datos[0];

        //Inicializamos el bucle desde el indice 1, ya que el 0 se uso arriba
        for($i = 1; $i < count($datos); $i++){

            //Si el valor actual de "datos[$i]" es mayor que el valor almacenado en $maximo, actualizalo con ese valor.
            if ($datos[$i] > $maximo){
                $maximo = $datos[$i];
            }

            //Si el vvalor actual es menor que $minimo, actualizamos minimo.
            if ($datos[$i] < $minimo){
                $minimo = $datos[$i];
            }
        }

        print"El valor maximo es: $maximo<br>";
        print"El valor minimo es: $minimo<br>";

        print"<hr>";


        //5. Con un bucle encontrar 98 y si lo encuentra finalice el buvle.
        $encontrar_98 = false; //VVVariable para indicar si se encuentra el 98

        for ($i = 0; $i < count($datos); $i++){
            if ($datos[$i] == 98){
                $encontrar_98 = true;
                break;
            }
        }

        if($encontrar_98){
            print'Se ha encontrado "98"<br>';
        }
        else{
            print'No se ha encontrado "98"<br>';
        }


        //6. Encontrar 100
        $encontrar_100 = false;

        for($i = 0; $i < count($datos); $i++){
            if ($datos[$i] == 100){
                $encontrar_100 = true;
                break;
            }
        }

        if($encontrar_100){
            print'Se ha encontrado "100".<br>';
        }else{
            print'No se ha encontrado "100".<br>';
        }


        //7.Utilizando ""while" genera 20 numeros naturales eentre 1 y 30
        $numeros = 0; // Inicializamos la variable a 0
        print '20 numeros entre 1 y 30:<br>';

        while ($numeros < 20) { // Bucle mientras $numeros sea menor que 20
            $numero = rand(1, 30); // Genera un número aleatorio entre 1 y 30
            $array_numeros[] = $numero;
            echo $numero . ", "; // Imprime el número con un espacio
            $numeros++; // Incrementa el contador para que el bucle avance
        }


        //8. Usar min y max

        $maximo_w = max($array_numeros);
        $minimo_w = min($array_numeros);

        print "<br>El número máximo es: $maximo_w<br>";
        print "El número mínimo es: $minimo_w<br>";

        //9. Encontrar 98?
        $encontrar_98w = false;
        while($j < count($array_numeros)){
            if ($array_numeros[$j] == 98){
                $encontrar_98w = true;
                break;
            }
            $j++;
        }

        if ($encontrar_98w){
            echo "Elemento econtrado";
        } else {
            echo "Elemento no encooontrado";
        }

        //10. Encontrar 100?
        $encontrar_100w = false;
        while($k < count($array_numeros)){
            if ($array_numeros[$k] == 100){
                $encontrar_100w = true;
                break;
            }
            $k++;
        }

        if ($encontrar_100w){
            echo "Elemento econtrado";
        } else {
            echo "Elemento no encooontrado";
        }

    ?>
</body>
</html>