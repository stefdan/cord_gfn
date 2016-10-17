<?php 

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Prüfe alle Benutzer auf Übereinstimmung der übergebenen Daten
foreach ($benutzerDaten as $benutzername => $daten) {
		if (
			($benutzername === trim($_POST['benutzername'])) &&
			($daten['passwort'] === trim($_POST['passwort']))
			) {
				// Wenn ja, logge Benutzer ein
				loggeEin($benutzername);
			}
}

/*
 * Leite zur index.php um. Der Besucher wird entweder das
 * Login_Formular sehen, wenn die Daten Falsch waren, oder
 * das Hauptmenu, wenn der Login erfolgreich war.
 */
 redirect('index.php');
 ?>