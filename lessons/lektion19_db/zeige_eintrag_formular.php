<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf neue Einträge posten.
if (!istEingeloggt()) {
    redirect('index.php');
}
if(!empty($_POST)) {
// Erstelle einen neuen Eintrag im Format der anderen Einträge.
$eintrag = array(
    'titel' => trim($_POST['titel']),
    'inhalt' => trim($_POST['inhalt']),
    'autor' => $_SESSION['eingeloggt'],
    'erstellt_am' => time(),
);

// Hole die alten Einträge, hänge den neuen an und speichere.
// $eintraege = holeEintraege($db);
// $eintraege[] = $eintrag;
speichereEintraege($db, $eintrag);
$_SESSION['titel'] = $eintrag['titel'];
$_SESSION['inhalt'] = $eintrag['inhalt'];
redirect('eintrag_danke.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Neuen Eintrag schreiben</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

          <h1>Schreiben Sie hier einen neuen Eintrag:</h1>

          <form method="post">
              <input type="text" name="titel" id="titel" required="required" placeholder="Titel" />
              <textarea name="inhalt" id="inhalt" cols="50" rows="10" required="required" placeholder="Inhalt"></textarea>
              <input type="submit" value="Eintragen" />
          </form>

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