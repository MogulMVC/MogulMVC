<?php 

class Css_icons {

	function index() {
		$data['page_title'] = 'Icons';
		MLoad::view('css_icons.php', $data);
	}

}
