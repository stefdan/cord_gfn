<?php

require_once 'inc/konfiguration.inc.php';

$sgl = 'CREATE_TABLE IF NOT EXISTS eintraege {
    id PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(255),
    erstellt_am DATE,
    author VARCHAR(50),
    inhalt TEST
};';