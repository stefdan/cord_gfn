<?php

function teileWorte($satz)
{
    return explode(' ', $satz);
}

$satz = 'Das ist ein kurzer Satz.';
$woerter = teileWorte($satz);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Teile Worte</title>
</head>

<body>
    <p>
        Der Satz
        "<?php echo $satz; ?>" 
        besteht aus den Worten: 
        <?php echo implode(', ', $woerter); ?>
    </p>
</body>

</html>