<?php
require_once 'inc/datenbank.inc.php';

$db->query('DROP TABLE IF EXISTS genres');
$db->query('DROP TABLE IF EXISTS genres');

$db->query(
    'CREATE TABLE genres (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255) UNIQUE KEY 
        ) DEFAULT CHARSET = utf8'
);

$db->query(
    'CREATE TABLE filme (
      id INTEGER PRIMARY KEY AUTO_INCREMENT,
      titel VARCHAR(255),
      veroeffentlichung DATE,
      dauer INT(5),
      genre_id INTEGER 
    ) DEFAULT CHARSET = utf8'
);

$db->query(
    'INSERT INTO genres (titel) VALUES
      ("Action"),
      ("Drama"),
      (Komödie)
    '
);

$db->query('INSERT INTO genres (titel) VALUES ("Sci-Fi")');
$id = $db->lastInsertId();

$db->query(
    'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES
      ("Dune", "1984-12-14", 137, ' . $id . '),
      ("Total Recal", "1990-07-26", 113, ' . $id . ' )
      '
);