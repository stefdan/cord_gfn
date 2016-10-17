<?php
session_start();
$name =$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>- A N Z E I G E N -</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<h1>anzeigen</h1>
Hallo <?php echo $name?>
<br /><br />
<a href="eintragen.php">zu eintragen</a>
</body>
</html>