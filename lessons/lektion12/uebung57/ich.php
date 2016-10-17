<?php

$ich = array(
    'vorname' => 'Cord',
    'nachname' => 'Mählmann',
    'alter' => '45',
    'geschlecht' => 'm',
);

$ichKeys = array_keys($ich);
$ichValues = array_values($ich);

$i = 0;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich</title>
</head>

<body>
    <table>
        <?php while ($i < count($ich)) { ?>
            <tr>
                <th><?php echo ucfirst($ichKeys[$i]); ?></th>
                <td><?php echo $ichValues[$i]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>
</body>

</html>