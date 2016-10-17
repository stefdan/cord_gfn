<?php

require_once 'inc/konfiguration.inc.php';

$db->query('DROP TABLE IF EXISTS eintraege');

$sql = 'CREATE TABLE eintraege (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(255),
    erstellt_am INT,
    autor VARCHAR(50),
    inhalt TEXT
);';

$db->query($sql);

// $stmt = $db->query('SHOW COLUMNS FROM eintraege');

// var_dump($stmt->fetchAll());

// var_dump($testdaten[0]);

$sql = 'INSERT INTO eintraege (titel, erstellt_am, autor, inhalt) ' .
        'VALUES (:titel, :erstellt_am, :autor, :inhalt);';

$stmt = $db->prepare($sql);
foreach ($testdaten as $t){
    $stmt->execute($t);
}

$stmt = $db->query('SELECT * FROM eintraege;');
var_dump($stmt->fetchAll());