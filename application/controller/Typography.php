<?php

class Typography {

	function index() {
		$data['page_title'] = 'Typography';
		MLoad::view('typography.php', $data);
	}

}
