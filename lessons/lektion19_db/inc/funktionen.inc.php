<?php

function speichereEintraege($db, $eintraege)
{
    $sql = 'INSERT INTO eintraege (titel, erstellt_am, autor, inhalt) ' .
        'VALUES (:titel, :erstellt_am, :autor, :inhalt);';

    $stmt = $db->prepare($sql);
    $stmt->execute($eintraege);
    }

function holeEintraege($db, $umgedreht = false)
{
    $sql = 'SELECT * FROM weblog.eintraege ORDER BY erstellt_am DESC ;' ;
    $stmt = $db->query($sql);
    return $stmt->fetchAll();
/*
    if (file_exists(PFAD_EINTRAEGE)) {
        $eintraege = unserialize(file_get_contents(PFAD_EINTRAEGE));
        if ($umgedreht === true) {
            $eintraege = array_reverse($eintraege);
        }
    } else {
        $eintraege = array();
    }

    return $eintraege;
*/
}

function bereinige($benutzerEingabe, $encoding = 'UTF-8')
{
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function istEingeloggt()
{
    return isset($_SESSION['eingeloggt']);
}

function loggeEin($benutzername)
{
    $_SESSION['eingeloggt'] = $benutzername;
}

function loggeAus()
{
    unset($_SESSION['eingeloggt']);
}
