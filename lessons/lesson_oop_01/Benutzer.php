<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 17.10.16
 * Time: 09:54
 */

class Benutzer
{
    public $name = '';
    public $passwort = '';
    public $gruppen = array('gaeste');

    function holeGruppen($gruppen)
    {

        return $this->gruppen;
    }
}

$remolt = new Benutzer();
var_dump($remolt->holeGruppen($remolt->gruppen));