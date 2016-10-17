<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$inhalt = htmlspecialchars($_POST['inhalt']);
$farben = htmlspecialchars(implode(', ', $_POST['farbe']));

var_dump($_POST['farbe']);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Auslesen</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Inhalt</th>
            <td><?php echo $inhalt; ?></td>
        </tr>
        <tr>
            <th>Lieblingsfarbe</th>
            <td><?php echo $farben; ?></td>
        </tr>
    </table>
</body>

</html>