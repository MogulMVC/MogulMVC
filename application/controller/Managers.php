<?php

class Managers {

	function index() {
		$data['page_title'] = 'Managers';
		MLoad::view('managers.php', $data);
	}

}
