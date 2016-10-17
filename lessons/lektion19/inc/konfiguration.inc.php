<?php

error_reporting(E_ALL); // im produktiven Umfeld deaktivieren
date_default_timezone_set('Europe/Berlin'); // oder php.ini

define('PFAD_EINTRAEGE', 'daten/eintraege.txt');

$benutzerDaten = array(
	'inewton' => array(
		'vorname' => 'Isaac',
		'nachname' => 'Newton',
		'passwort' => 'apfel',
	),
	'jsartre' => array(
			'vorname' => 'Jean-Paul',
			'nachname' => 'Sartre',
			'passwort' => 'vernunft',
	),
	'ghegel' => array(
			'vorname' => 'Georg Wilhelm Friedrich',
			'nachname' => 'Hegel',
			'passwort' => 'logisch',
	),	
);