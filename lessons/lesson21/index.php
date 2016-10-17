<?php


require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';

$sql = 'SELECT f.*, g.titel AS genre_titel FROM filme f' .
    ' JOIN genres g WHERE f.genre_id = g.id' .
    ' ORDER BY f.titel ASC';
$statement = $db->query($sql);
$filme = $statement->fetchAll();
unset($statement);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PDO-Projekt</title>
</head>

<body>

<header>
    <h1>Startseite</h1>
</header>

<?php require 'inc/hauptmenu.tpl.php'; ?>

<section>

    <?php
    foreach ($filme as $film) {
        require 'eintrag.tpl.php';
    }
    ?>

</section>
</body>
</html>
