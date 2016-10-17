<?php
require_once 'inc/datenbank.inc.php';

$statement = $db->query('DELETE FROM filme WHERE id = 1');

?>

<?php echo $statement->rowCount(); ?>