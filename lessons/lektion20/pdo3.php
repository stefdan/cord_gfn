<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT Host, User FROM user');
$daten = $statement->fetchAll();

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
	<ul>
		<?php foreach ($daten as $benutzer): ?>
			<li>
				Host: <?php echo $benutzer['Host'] ?><br />
				User: <?php echo $benutzer['User'] ?>
			</li>
		<?php endforeach; ?>
	</ul>

</body>

</html>