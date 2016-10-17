<?php

// phpinfo();

$wert = error_reporting(0);

echo $wert;

error_reporting($wert);

$text = 'Programmierer sind Automaten, die Pizza und Kaffee in Code umwandeln!';
$suche = 'A';
echo strpos($text, $suche);





