<?php

$sprachen = ['PHP', 'JavaScript', 'Ruby', 'Python', 'Java', 'Perl'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Sprachen</title>
</head>

<body>
    <ul>
        <?php foreach ($sprachen as $sprache) { ?>
            <li><?php echo $sprache; ?></li>
        <?php } ?>
    </ul>
</body>

</html>