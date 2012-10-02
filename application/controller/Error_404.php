<?php

class Error_404 {

	function index() {
		$data['page_title'] = 'Error 404';
		MLoad::view('error_404.php', $data);
	}

}
