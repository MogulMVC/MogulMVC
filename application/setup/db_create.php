<?php

$DB = $GLOBALS['PDO'][0];

$query = $DB -> prepare("CREATE TABLE IF NOT EXISTS tableName (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  
  created DATETIME,
  updated DATETIME
)");
$query -> execute();

echo 'Tables Created';