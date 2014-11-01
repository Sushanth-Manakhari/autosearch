<?php

$db = new PDO('mysql:dbname=autosearch; host=localhost', 'root', 'nick123');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>