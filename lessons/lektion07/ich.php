<?php

$ich = [
    'vorname' => 'Cord',
    'nachname' => 'Mählmann',
    'alter' => '45',
    'email' => 'cord.maehlmann@posteo.de',
];

$anderePerson = [
    'vorname' => 'Paul',
    'nachname' => 'Wellert',
    'alter' => '44',
    'email' => 'paulwellert@online.de',
];

$beschriftungen = array_keys($ich);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich und wer anders</title>
</head>

<body>
    <h1>Ich und wer anders</h1>
    <table border="1">
        <tr>
            <th><?php echo ucfirst($beschriftungen[0]); ?></th>
            <th><?php echo ucfirst($beschriftungen[1]); ?></th>
            <th><?php echo ucfirst($beschriftungen[2]); ?></th>
            <th><?php echo ucfirst($beschriftungen[3]); ?></th>
        </tr>
        <tr>
            <td><?php echo $ich['vorname']; ?></td>
            <td><?php echo $ich['nachname']; ?></td>
            <td><?php echo $ich['alter']; ?></td>
            <td><?php echo $ich['email']; ?></td>
        </tr>
        <tr>
            <td><?php echo $anderePerson['vorname']; ?></td>
            <td><?php echo $anderePerson['nachname']; ?></td>
            <td><?php echo $anderePerson['alter']; ?></td>
            <td><?php echo $anderePerson['email']; ?></td>
        </tr>
    </table>
</body>

</html>