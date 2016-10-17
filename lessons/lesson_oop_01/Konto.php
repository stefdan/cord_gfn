<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 17.10.16
 * Time: 09:22
 */

class Konto
{
    public $glaeubiger = '';
    public $kontoNummer = '';
    public $guthaben = ;
    public $waehrung;

    function holeHallo()
    {
        return 'Hallo Welt';
    }
}

$sparbuch = new Konto();
var_dump($sparbuch);

// $sparbuch->glaeubiger = 'Dagobert';
// $sparbuch->guthaben = 100;

$girokonto = new Konto();
var_dump($girokonto);
echo $sparbuch->holeHallo() - '<br />';
    echo $girokonto->holeHallo() - '<br />';