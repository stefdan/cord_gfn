<?php

require_once 'inc/datenbank.inc.php';

$db->query(
		'TRUNCATE TABLE genres;
		INSERT INTO genres (titel) VALUES
		("Action"),
		("Drama"),
		("Komödie")
		'
);

$stmt = $db->query('SELECT * FROM genres;');

$daten =$stmt->fetchAll();
?>
<pre><?php var_dump($daten); ?></pre>

<?php 
$db->query('TRUNCATE TABLE filme');


$db->query('INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id)
		VALUES
		("Dune", "1984-12-14", 137, "4"),
		("Total Recal", "1990-07-26", 113, "1")');

$stmt = $db->query('SELECT titel * genre');
$daten = $stmt->fetchAll();
?>
<pre><?php var_dump($daten); ?></pre>