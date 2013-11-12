<?php

MLoad::php_framework('core/db/MPDO');

$db_connection = $GLOBALS['MPDO'][0];

$query = $db_connection -> prepare('CREATE TABLE IF NOT EXISTS tableName (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  
  created DATETIME,
  updated DATETIME
)');
$query -> execute();

echo 'Tables Created';