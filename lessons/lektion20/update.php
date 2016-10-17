<?php
require_once 'inc/datenbank.inc.php';

$statement = $db->query('UPDATE filme SET genre_id = 1');

?>

<?php echo $statement->rowCount(); ?>
