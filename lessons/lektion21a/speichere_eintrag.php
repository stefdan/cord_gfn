<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

/*
 * Wenn der Benutzer eingeloggte ist oder die Seite nicht
 * über POST aufgerufen ,also das Formular nicht abgeschickt
 * wurde, leite auf index.php
 */
if ((!istEingeloggt()) || empty($_POST)) {
	redirect('index.php');
}

// Erstellt einen neuen Eintrag im Format der anderen Einträge.
$eintrag = array(
		'titel' => trim($_POST['titel']),
		'inhalt' => trim($_POST['inhalt']),
		'autor' => $_SESSION['eingeloggt'],
		'erstellt_am' => time(),
);

// Hole die alten Einträge, hänge den neuen an und speichere
$eintraege = holeEintraege();
$eintraege[] = $eintrag;
file_put_contents(PFAD_EINTRAEGE, serialize($eintraege));

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Weblog - Eintrag speichern</title>
	<link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

	<div id="gesamt">
	
		<header id="kopf">
			<h1>Mein Weblog</h1>
		</header>
		
		<section id="content">
			
			<header>
				<h1>Folgender Eintrag wurde erfolgreich gespeichert:</h1>
			</header>
			
			<article class="zitat">
				<header class="eintrag_oben">
					<h1><?php echo bereinige($eintrag['titel']); ?></h1>
				</header>
				
				<p>
					<?php echo nl2br(bereinige($eintrag['inhalt'])); ?>
				</p>
			</article>
			
			<p>
				<a href="index.php" class="backlink">Zurück zur Hauptseite</a>
			</p>
		</section>
		
		<aside id="menu">
			<?php require 'inc/hauptmenu.tpl.php'; ?>
		</aside>
	
		<footer id="fuss">
			Das ist das Ende
		</footer>
		
	</div>

</body>

</html>