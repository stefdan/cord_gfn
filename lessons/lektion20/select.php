<?php

require_once 'inc/datenbank.inc.php';

$sql = 'SELECT * FROM genres WHERE titel LIKE "%a%" ORDER BY titel ASC';

$statement = $db->query($sql);
$daten = $statement->fetchAll();

?>
<pre><?php var_dump($sql); ?></pre>
<pre><?php var_dump($daten); ?></pre>