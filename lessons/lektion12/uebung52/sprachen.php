<?php

$sprachen = ['PHP', 'JavaScript', 'Ruby', 'Python', 'Java', 'Perl'];
$i = 0;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Sprachen</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < count($sprachen); $i++) { ?>
            <li><?php echo $sprachen[$i]; ?></li>
        <?php } ?>
    </ul>
</body>

</html>