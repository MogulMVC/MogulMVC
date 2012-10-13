<?php 

class XML {

	function index() {
		$data['page_title'] = 'XML';
		MLoad::view('xml.php', $data);
	}

}
