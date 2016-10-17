
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

echo nl2br($_POST['text']);

// var_dump($_POST);

?>

        
        <form method="POST">
            <textarea name="text"></textarea>
            <input type="submit">
        </form>
    </body>
</html>
