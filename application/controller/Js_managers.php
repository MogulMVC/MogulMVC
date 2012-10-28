<?php

class Js_managers {

	function index() {
		$data['page_title'] = 'Managers';
		MLoad::view('js_managers.php', $data);
	}

}
