<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

echo 'This is an example command.<br />For security reasons commands require a password, which you have obviously provided.';
