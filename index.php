<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Practica David</title>

    <?php
        //Variables principales.
        $name = (string) "Marcelo";
        $edad = (int) "19";
        $altura = (float) "1.73"; 
        $es_estudiante = (string) "Si";

        //Suma de 5 años.
        $edad5 = (int) $edad + 5;

        //Convercion de metros a centimetros.
        $altura_cm = $altura * 100; //Surge un error si colocamos un int.

        //Salida.
        $output = "Hola $name, con una edad de $edad y con una altura de $altura metros. 🥵<br><br>
                Eres estudiante? $es_estudiante.<br><br>
                La suma de la edad: $edad5. <br><br>
                Altura en centimetros: $altura_cm cm."

    ?>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="portafolio.php">Portafolio</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </nav>
    </header>

    <main>
        <h1>Pagina web</h1>
        <p>
            <?=
            //En PHP, <?= es equivalente a "echo" o "print".
                //Imprime la salida de la variable "output".
                $output
            ?>
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui fuga facere rem veniam vel tenetur praesentium magni animi omnis unde in eum nesciunt ea, commodi porro, alias assumenda nulla earum!</p>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4Cem6pxT8SaOcED8C3XfxDKKI54Tu_k5tWA&s" alt="Pablo de los Backyardigans">

        <h2>Refrescar pagina</h2>
        <p>Presiona el siguiente boton para refrescar la pagina.</p>


        <!---Creamos el boton para refrescar la pagina---->
        <!---El boton utiliza el atributo "onclick" para llamar a la funcion "refrescarPagina()"---->
        <button onclick="refrescarPagina()">Refrescar</button>

        <!---Script JavaScript---->
        <script>
            // La funcion "refrescarPagina()" usa el metodo "location.reload()", para recargar la pagina "actual".
            function refrescarPagina() {
                location.reload();
            }
        </script>

    </main>

    <footer>
        <p>&copy Derechos reservados por Marcelo 😉</p>
    </footer>
</body>
</html>