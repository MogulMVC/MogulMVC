<?php

class Artest {

	function index() {

		$data['someData'] = "Somet Data 123456";

		MLoad::view('test', $data);
	}

	function create() {

		MLoad::model('ARTestModel');
		$test = ARTestModel::create(array('content' => 'Tito'));

	}

	function read() {

		MLoad::model('ARTestModel');
		$test = ARTestModel::find(1);

		echo $test -> created;

	}

	function update() {

		MLoad::model('ARTestModel');
		$test = ARTestModel::create(array('content' => 'Tito'));

	}

	function delete() {

		MLoad::model('ARTestModel');
		$test = ARTestModel::create(array('content' => 'Tito'));

	}

}
