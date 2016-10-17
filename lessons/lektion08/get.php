<?php

var_dump($_GET);

$x = 1;

$dateiname = $_SERVER['PHP_SELF'];

?>

<a href="get.php?name=cord&alter=45 Jahre">Link1</a><br>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=cord&alter=45%20Jahre">Link2</a><br>

<a href="<?php echo $dateiname; ?>?name=cord&alter=45%20Jahre">Link3</a><br>

<p>Mein Name ist
    
<?php 

if(isset($_GET['name'])) {
    echo ucfirst($_GET['name']); 
} else {
    echo 'Hase';
}

?>.</p>

<a href="server.php">Server</a>


