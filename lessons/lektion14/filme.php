<?php

$filme2[0]['regisseur'] = array(
            'vorname' => 'Garth',
            'nachname' => 'Jennings',
            'geschlecht' => 'm',
        );

$filme = array(
    array(
        'titel' => 'The Hitchhikers Guide to the Galaxy',
        'dauer' => 109,
        'genre' => 'SF',
        'regisseur' => array(
            'vorname' => 'Garth',
            'nachname' => 'Jennings',
            'geschlecht' => 'm',
        ),
        'darsteller' => array (
            array(
                'vorname' => 'Martin',
                'nachname' => 'Freeman',
                'geschlecht' => 'm',
            ),
            array(
                'vorname' => 'Zooey',
                'nachname' => 'Deschanel',
                'geschlecht' => 'w',
            ),
        ),
    ),

    array(
        'titel' => 'Forrest Gump',
        'dauer' => 142,
        'genre' => 'Drama',
        'regisseur' => array(
            'vorname' => 'Robert',
            'nachname' => 'Zemeckis',
            'geschlecht' => 'm',
        ),
        'darsteller' => array (
            array(
                'vorname' => 'Tom',
                'nachname' => 'Hanks',
                'geschlecht' => 'm',
            ),
            array(
                'vorname' => 'Sally',
                'nachname' => 'Field',
                'geschlecht' => 'w',
            ),
        ),
    ),

    array(
        'titel' => 'The Lord of the Rings: The Fellowship of the Ring',
        'dauer' => 208,
        'genre' => 'Fantasy',
        'regisseur' => array(
            'vorname' => 'Peter',
            'nachname' => 'Jackson',
            'geschlecht' => 'm',
        ),
        'darsteller' => array (
            array(
                'vorname' => 'Ian',
                'nachname' => 'McKellen',
                'geschlecht' => 'm',
            ),
            array(
                'vorname' => 'Viggo',
                'nachname' => 'Mortensen',
                'geschlecht' => 'm',
            ),
        ),
    ),
);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Filme</title>
</head>

<body>
    <h1>Filme</h1>

    <table border="1">
        <tr>
            <?php foreach (array_keys($filme[0]) as $k) { ?>
                <th><?php echo ucfirst($k); ?></th>
            <?php } ?>
        </tr>
        <?php foreach ($filme as $f) { ?>
            <tr>
                <td><?php echo $f['titel']; ?></td>
                <td><?php echo $f['dauer']; ?> Minuten</td>
                <td><?php echo $f['genre']; ?></td>
                <td>
                    <?php echo $f['regisseur']['vorname']; ?>
                    <?php echo $f['regisseur']['nachname']; ?>,
                    <?php echo $f['regisseur']['geschlecht']; ?>
                </td>
                <td>
                    <?php foreach ($f['darsteller'] as $d) { ?>
                        <?php echo $d['vorname']; ?>
                        <?php echo $d['nachname']; ?>,
                        <?php echo $d['geschlecht']; ?>
                        <br />
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>