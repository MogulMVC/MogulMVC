<?php 

class Js_classes {

	function index() {
		$data['page_title'] = 'JavaScript Classes';
		MLoad::view('js_classes.php', $data);
	}

}
