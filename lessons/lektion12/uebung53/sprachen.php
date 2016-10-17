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
        <?php while ($i < count($sprachen)) { ?>
            <li><?php echo $sprachen[$i]; ?></li>
            <?php $i++; ?>
        <?php } ?>
    </ul>
</body>

</html>