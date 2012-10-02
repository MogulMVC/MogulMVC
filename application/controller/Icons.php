<?php 

class Icons {

	function index() {
		$data['page_title'] = 'Icons';
		MLoad::view('icons.php', $data);
	}

}
