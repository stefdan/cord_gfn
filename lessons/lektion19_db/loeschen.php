<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';

var_dump($_GET);

$sql = "DELETE FROM eintraege WHERE id=" . $_GET['id'] . " LIMIT 1;";

$db->query($sql);

redirect('index.php');