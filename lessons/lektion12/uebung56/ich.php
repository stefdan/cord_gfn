<?php

$ich = array(
    'vorname' => 'Cord',
    'nachname' => 'Mählmann',
    'alter' => '45',
    'geschlecht' => 'm',
);

$ichKeys = array_keys($ich);
$ichValues = array_values($ich);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich</title>
</head>

<body>
    <table border="1">
        <?php for ($i = 0; $i < count($ich); $i++) { ?>
            <tr>
                <th><?php echo ucfirst($ichKeys[$i]); ?></th>
                <td><?php echo $ichValues[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>