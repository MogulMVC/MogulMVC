<?php

class Test {

	function index() {

		$data['someData'] = "Somet Data 123456";

		MLoad::view('test', $data);
	}

	function create() {
		
		MLoad::model('ARTest');
		$test = ARTest::create(array('content' => 'Tito'));

	}

	function read() {

		MLoad::model('ARTest');
		$test = ARTest::find(1);
		
		var_dump($test);

	}

	function update() {
		
		MLoad::model('ARTest');
		$test = ARTest::create(array('content' => 'Tito'));

	}

	function delete() {
		
		MLoad::model('ARTest');
		$test = ARTest::create(array('content' => 'Tito'));

	}

}
