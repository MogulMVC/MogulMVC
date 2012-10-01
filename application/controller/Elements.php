<?php

class Elements {

	function index() {
		MLoad::php_framework('ui/MMessages.php');

		$data['page_title'] = 'Elements';
		MLoad::view('elements.php', $data);
	}

}
