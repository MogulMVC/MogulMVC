<?php

class Code_transformers {

	function index() {
		MLoad::php_framework('ui/MMessages.php');

		$data['page_title'] = 'Code Transformers';
		MLoad::view('code_transformers.php', $data);
	}

}
