<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>\n";

print "<h3>Mostrando datos</h3>";
print "<p>Nom: " . $_REQUEST["nombre"] . "</p>";
print "<p>Cognom: " . $_REQUEST["apellido"] . "</p>";
print "<p>Edat: " . $_REQUEST["edad"] . "</p>";
print "<p>Carnet: " . $_REQUEST["carnet"] . "</p>";

if ($_REQUEST["edad"] >= 18 && $_REQUEST["carnet"] == "on") {
    print "¡Enhorabuena!!!";
} elseif ($_REQUEST["edad"] >= 18 && $_REQUEST["carnet"] == NULL) {
    print "Ya es hora de que te saques el carnet";
} else {
    print "Eres muy joven.";
}
?>
