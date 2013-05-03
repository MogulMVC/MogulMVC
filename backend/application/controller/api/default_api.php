<?php

echo 'This is from the default api';

if (!empty($_GET)) {
	echo '<br /><br />GET Variables<br />';
	var_dump($_GET);
}

if (!empty($_POST)) {
	echo '<br /><br />POST Variables<br />';
	var_dump($_POST);
}
