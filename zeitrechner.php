<?php 
//Gib den Endzeitpunkt an! 
$startTime = mktime(15, 15, 0, 8, 15, 1974); //Stunde, Minute, Sekunde, Monat, Tag, Jahr; 

//Aktuellezeit des microtimestamps nach PHP5, für PHP4 muss eine andere Form genutzt werden. 
$timeNow = microtime(true); 

//Berechnet differenz von der Endzeit vom jetzigen Zeitpunkt aus. 
$diffTime =  $timeNow - $startTime; 

//Zerlegt $diffTime am Dezimalpunkt, rundet vorher auf 2 Stellen nach dem Dezimalpunkt und gibt diese zurück.
$milli = explode(".", round($diffTime, 2)); 
$millisec = round($milli[1]); 

//Berechnung für Tage, Stunden, Minuten 
$day = floor($diffTime / (24*3600)); 
$diffTime = $diffTime % (24*3600); 
$houre = floor($diffTime / (60*60)); 
$diffTime = $diffTime % (60*60); 
$min = floor($diffTime / 60); 
$sec = $diffTime % 60; 

//Ausgabe von $day (Tage), $houre (Stunden), $sec (Sekunden), $millisec (Millisekunden) 
echo $day." Tage "; 
echo $houre." Stunden "; 
echo $min." Minuten "; 
echo $sec." Sec "; 
echo $millisec." Millisec"; 
?>

<?php 
echo "<br>";
//Gib den Endzeitpunkt an! 
$startTime = mktime(7, 0, 0, 2, 28, 1977); //Stunde, Minute, Sekunde, Monat, Tag, Jahr; 

//Aktuellezeit des microtimestamps nach PHP5, für PHP4 muss eine andere Form genutzt werden. 
$timeNow = microtime(true); 

//Berechnet differenz von der Endzeit vom jetzigen Zeitpunkt aus. 
$diffTime =  $timeNow - $startTime; 

//Zerlegt $diffTime am Dezimalpunkt, rundet vorher auf 2 Stellen nach dem Dezimalpunkt und gibt diese zurück.
$milli = explode(".", round($diffTime, 2)); 
$millisec = round($milli[1]); 

//Berechnung für Tage, Stunden, Minuten 
$day = floor($diffTime / (24*3600)); 
$diffTime = $diffTime % (24*3600); 
$houre = floor($diffTime / (60*60)); 
$diffTime = $diffTime % (60*60); 
$min = floor($diffTime / 60); 
$sec = $diffTime % 60; 

//Ausgabe von $day (Tage), $houre (Stunden), $sec (Sekunden), $millisec (Millisekunden) 
echo $day." Tage "; 
echo $houre." Stunden "; 
echo $min." Minuten "; 
echo $sec." Sec "; 
echo $millisec." Millisec"; 
?>



<?php
$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'Loaded php.ini: ' . $inipath;
} else {
    echo 'A php.ini file is not loaded';
}
?>
