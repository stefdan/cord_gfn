<?php

$test1 = 'Hallo';
$test2 = 45 * 3.7;
$test3 = 7 . 5;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Typtest</title>
</head>

<body>
    <p>
        Der Wert der Variable ist <?php echo $test1; ?> und
        dieser hat den Datentyp <?php echo ucfirst(gettype($test1)); ?>!
    </p>
    <p>
        Der Wert der Variable ist <?php echo $test2; ?> und
        dieser hat den Datentyp <?php echo ucfirst(gettype($test2)); ?>!
    </p>
    <p>
        Der Wert der Variable ist <?php echo $test3; ?> und
        dieser hat den Datentyp <?php echo ucfirst(gettype($test3)); ?>!
    </p>
</body>

</html>