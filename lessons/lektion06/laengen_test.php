<?php

$test = 'PHP ist eine Programmiersprache.';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Längentest</title>
</head>

<body>
    <a href="variablen_test.php">Link zur anderen Datei</a>
    <p>Der Text in $test ist <?php echo strlen($test); ?> Zeichen lang.</p>
</body>

</html>