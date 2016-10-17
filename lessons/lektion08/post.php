<?php

var_dump($_POST);
var_dump($_REQUEST);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formular</title>
</head>
<body>

    <form action="post.php?id=4" method="POST">
        Name: <input type="text" name="name1"><br>
        Name: <input type="text" name="name2"><br>
        Kommentar: <textarea name="kommentar"></textarea>
        
        
        
        
        <input type="submit" name="button1" value="Loschicken">  
        <input type="submit" name="button2" value="Loschicken">     
    </form>
       
</body>
</html>