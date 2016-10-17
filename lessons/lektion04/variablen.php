<?php
    $vorname = 'Cord';
    $nachname = 'Mählmann';
    $alter = 45;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo 'Mein Name ist '
                 . $vorname
                 . $nachname
                 . ' und ich bin '
                 . $alter
                 . ' Jahre alt.'
        ?>
    </body>
</html>
