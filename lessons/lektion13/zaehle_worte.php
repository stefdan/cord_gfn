<?php

function zaehleWorte($satz)
{
    return count(explode(' ', $satz));
}

$satz = 'Das ist ein kurzer Satz.';
$anzahl = zaehleWorte($satz);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Zähle Worte</title>
</head>

<body>
    <p>
        Der Satz "<?php echo $satz; ?>" besteht aus <?php echo $anzahl; ?> Worten.
    </p>
</body>

</html>