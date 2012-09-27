<?php 

class About {

	function index() {
		$data['page_title'] = 'About';
		MLoad::view('about.php',$data);
	}

}
