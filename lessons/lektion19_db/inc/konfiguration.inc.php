<?php

require_once dirname(__FILE__) . '/datenbank.inc.php';

error_reporting(E_ALL); // im produktiven Umfeld deaktivieren
date_default_timezone_set('Europe/Berlin'); // oder php.ini

define('PFAD_EINTRAEGE', 'daten/eintraege.txt');

$benutzerDaten = array(
    'inewton' => array(
        'vorname' => 'Isaac',
        'nachname' => 'Newton',
        'passwort' => 'apfel',
    ),
    'jsartre' => array(
        'vorname' => 'Jean-Paul',
        'nachname' => 'Sartre',
        'passwort' => 'vernunft',
    ),
    'ghegel' => array(
        'vorname' => 'Georg Wilhelm Friedrich',
        'nachname' => 'Hegel',
        'passwort' => 'logisch',
    ),
);

$testdaten = array(
    array(
        'titel' => 'Blindheit per Definition',
        'erstellt_am' => time(),
        'autor' => 'inewton',
        'inhalt' => <<<'EOT'
Mit Blindheit per Definition geschlagen, dennoch nicht unsichtbar,
präsentiere ich mich als unbeachtetes und ungeliebtes Stiefkind
zeitgenössischer Literatur. Meine Bestimmung liegt - wie ich selbst -
in engen Grenzen und ist rein platzhalterischer Natur.

Kann ein missbrauchtes Wortgefüge eigentlich noch Schlimmeres
erleiden, als als Blindtext erdacht und vor der Öffentlichkeit
versteckt zu werden?
EOT
    ),
    array(
        'titel' => 'Langweilig',
        'erstellt_am' => time(),
        'autor' => 'jsartre',
        'inhalt' => <<<'EOT'
Dies ist ein Blindtext. Blindtexte sind zumeist weder informativ
noch interessant, sondern ausgesprochen langweilig.

So auch dieser.
EOT
    ),
    array(
        'titel' => 'Wenn ich gross bin',
        'erstellt_am' => time(),
        'autor' => 'ghegel',
        'inhalt' => <<<'EOT'
Ich bin nur ein kleiner Blindtext. Wenn ich gross bin, will ich
Ulysses von James Joyce werden. Aber jetzt lohnt es sich noch nicht,
mich weiterzulesen. Denn vorerst bin ich nur ein kleiner Blindtext.
EOT
    ),
);

