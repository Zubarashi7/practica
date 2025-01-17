<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>\n";

print "<h3>Mostrando datos</h3>";
print "<p>Nom: " . $_REQUEST["nombre"] . "</p>";
print "<p>Cognom: " . $_REQUEST["apellido"] . "</p>";
print "<p>IAW: " . $_REQUEST["IAW"] . "</p>";
print "<p>ASO: " . $_REQUEST["ASO"] . "</p>";
print "<p>SRI: " . $_REQUEST["SRI"] . "</p>"
print "<hr>";
$nombres = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellido"];
$notes = $_REQUEST["IAW"], $_REQUEST["ASO"], $_REQUEST["SRI"];
$aprovades = 0;
$suspensas = 0;

while($_REQUEST["IAW"] < 5){
    
}


print "<h3>Notas</h3><br>";
print "<p> Alumno: $nombres, $apellidos</p>"
print "<p> Aprovades: $aprovades</p>";
print "<p> Suspensas: $suspensas</p>";

?>