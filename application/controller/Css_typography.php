<?php

class Css_typography {

	function index() {
		$data['page_title'] = 'Typography';
		MLoad::view('css_typography.php', $data);
	}

}
