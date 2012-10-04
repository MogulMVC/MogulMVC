<?php 

class Css_classes {

	function index() {
		$data['page_title'] = 'CSS Classes';
		MLoad::view('css_classes.php', $data);
	}

}
