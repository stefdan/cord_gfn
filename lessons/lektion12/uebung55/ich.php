<?php

$ich = array(
    'vorname' => 'Cord',
    'nachname' => 'Mählmann',
    'alter' => '45',
    'geschlecht' => 'm',
);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich</title>
</head>

<body>
    <table border="1">
        <?php foreach ($ich as $schluessel => $wert) { ?>
            <tr>
                <th><?php echo ucfirst($schluessel); ?></th>
                <td><?php echo $wert; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>