<?php

function druckeMehrfach($string, $anzahl = 3)
{
    $text = '';
    for ($i = 0; $i < $anzahl; $i++) {
        $text .= $string . ' ';
    }

    return $text;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Drucke</title>
</head>

<body>
    <p><?php echo druckeMehrfach('Hallo Welt'); ?></p>
    <p><?php echo druckeMehrfach('Nix', 0); ?></p>
    <p><?php echo druckeMehrfach('Ganz viel', 12); ?></p>
</body>

</html>