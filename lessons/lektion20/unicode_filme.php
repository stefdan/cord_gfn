<?php

require_once 'inc/datenbank.inc.php';

$db->query(
		'DROP TABLE IF EXISTS genres;
		CREATE TABLE genres (
				id INTEGER PRIMARY KEY AUTO_INCREMENT,
				titel VARCHAR(255) UNIQUE KEY
		) DEFAULT CHARSET = utf8'
		);
$db->query(
		'DROP TABLE IF EXISTS filme;
		CREATE TABLE filme (
				id INTEGER PRIMARY KEY AUTO_INCREMENT,
				titel VARCHAR(255),
				veroeffentlichung DATE,
				dauer INT(5),
				gengre_id INT
		) DEFAULT CHARSET = utf8'
);

$stmt = $db->query('SHOW COLUMNS FROM filme');
$daten = $stmt->fetchAll();
var_dump($daten);

$stmt = $db->query('SHOW COLUMNS FROM genres');
$daten = $stmt->fetchAll();
?>
<pre><?php var_dump($daten); ?></pre>
