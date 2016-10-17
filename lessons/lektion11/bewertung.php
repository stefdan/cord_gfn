<?php

$note = isset($_GET['note']) ? intval($_GET['note']) : null;

switch ($note) {
    case 1:
        $nachricht = 'Besser gehts nicht!';
        break;
    case 2:
        $nachricht = 'Ist doch prima!';
        break;
    case 3:
        $nachricht = 'Passt doch!';
        break;
    case 4:
        $nachricht = 'Gerade noch OK!';
        break;
    case 5:
        $nachricht = 'Das war nicht so gut!';
        break;
    case 6:
        $nachricht = 'Mist!!!';
        break;
    default:
        $nachricht = 'Fehler!';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bewertung</title>
</head>

<body>
    <p><?php echo $nachricht; ?></p>
</body>

</html>