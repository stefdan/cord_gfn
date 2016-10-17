<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
$daten = $statement->fetch();

?>
<?php  // <pre><?php var_dump($daten); ? ></pre>  ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>PDO</title>
</head>

<body>

	<h1>Mysql-Benutzer</h1>
<pre><?php var_dump($daten); ?></pre>

</body>

</html>