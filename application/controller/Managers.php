<?php

class Managers {

	function index() {
		MLoad::php_framework('ui/MMessages.php');

		$data['page_title'] = 'Managers';
		MLoad::view('managers.php', $data);
	}

}
