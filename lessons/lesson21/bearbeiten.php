<?php
/**
 * Created by PhpStorm.
 * User: vb
 * Date: 10/13/2016
 * Time: 11:45 PM
 */
require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';

if (empty($_REQUEST['id'])) {
    redirect('index.php');
}


$sql ='SELECT * FROM filme WHERE id = ?';

$statement = $db->prepare($sql);
$statement->execute(
    array($_REQUEST['id'])
);
$film = $statement->fetch();
unset($statement);
var_dump($film);
$statement = $db->query('SELECT * FROM genres');
$genres = $statement->fetchAll();
unset($statement);

if (!empty($_POST)) {
    $sql = 'UPDATE filme SET
    titel=:titel,
    veroeffentlichung=:veroeffentlichung,
    dauer=:dauer;
    genre_id=:genre_id
    WHERE id=:id';

    $statement =$db->prepare($sql);
    $statement->execute($_POST);


    redirect('index.php');
}


$patternDatum = '[0-9]{4}' .
    '-(0[1-9]|1[012])' .
    '-(0[1-9]|1[0-9]|2[0-9]|3[01])';

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>PDO-Projekt</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>
<header>
    <h1>Film anlegen</h1>
</header>
<?php require 'hauptmenu.tpl.php'; ?>

<section>

    <h2>Schreiben Sie hier einen neuen Eintrag:</h2>

    <form
        action="<?php echo bereinige($_SERVER['PHP_SELF']); ?>"
        method="post"
    >
        <input
            type="hidden"
            name="id"
            value="<?php echo intval($film['id']); ?>"
        />

        <input
            type="text" required="required"
            name="titel" id="titel"
            placeholder="Filmtitel"
            value="<?php echo bereinige($film['titel']); ?>"
        />

        <input
            type="text" required="required"
            name="veroeffentlichung" id="veroeffentlichung"
            pattern="<?php echo $patternDatum; ?>"
            placeholder="Veröffentlichungsdatum"
            value="<?php echo bereinige($film['veroeffentlichung']); ?>"
        />
        Format JJJJ-MM-TT

        <input
            type="text" required="required"
            name="dauer" id="dauer"
            pattern=" [0-9]+"
            placeholder="Dauer"
            value="<?php echo bereinige($film['dauer']); ?>"
        />
        Minuten

        <select name"genre_id id="genre_id">
        <option value="">-- GENRE wählen --</option>
        <?php foreach ($genres as $genre): ?>
            <option
                value="<?php echo intval($genre['id']); ?>"
            ><?php echo bereinige($genre['titel']); ?></option>
        <?php endforeach; ?>
        </select>

        <input type="submit" value"Aktualisieren" />
    </form>
</section>

</body>


</html>
