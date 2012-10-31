<?php 

class Test {

	function index() {
		
		$data['someData'] = "Somet Data 123456";
		
		MLoad::view('test', $data);
	}

}
