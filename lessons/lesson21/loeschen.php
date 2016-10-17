<?php
require_once 'konfiguration.inc.php';
require_once 'funktionen.inc.php';

if (!empty($_GET['id'])) {
    $sgl = 'DELETE FROM filme WHERE id = ?';

    $statement = $db->prepare($sql);
    $statement->execute(
        array($_GET['id'])
    );

}

redirect('index.php');
?>