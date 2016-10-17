<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Hallo</title>
    </head>

    <body>
        <a href="hallo.php?vorname=Cord&nachname=Mählmann">Cord Mählmann</a>
        <?php if (!empty($_GET)) { ?>
            <p>
                Hallo
                <?php echo $_GET['vorname']; ?>
                <?php echo $_GET['nachname']; ?>. 
                Schön, dass Sie wieder da sind.
            </p>
        <?php } ?>
    </body>

</html>