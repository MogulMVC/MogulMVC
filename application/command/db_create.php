<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

MLoad::php_framework('core/db/MPDO');

$DB = $GLOBALS['MPDO'][0];

$query = $DB -> prepare('CREATE TABLE IF NOT EXISTS tableName (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  
  created DATETIME,
  updated DATETIME
)');
$query -> execute();

echo 'Tables Created';