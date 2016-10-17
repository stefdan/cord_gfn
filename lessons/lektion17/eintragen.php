<?php
session_start ();
$_SESSION ['name'] = @_GET['name'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>- E I N T R A G E N -</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
	<h1>eintragen</h1>
<?php echo @$name?><br />
	<br />
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
		<input type="text" id="name" name="name"> <input type="submit">
	</form>
	<br>
<?php
$name = @$_GET['name'];
if (! isset ( $name )) {
	echo '<span class="red">Geben sie Ihren Namen an!</span>';
} else {
	echo "<span class='green'>Hallo " . $name . "! " . "</span>";
}

?>
<br />
	<a href="anzeigen.php">zu anzeigen</a>
</body>
</html>