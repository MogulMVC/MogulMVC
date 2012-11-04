<?php

class Artest {

	function create() {

		MLoad::model('ARTestModel');

		$object = new ARTestModel();
		$object -> content = "Another bit of content";
		$object -> save();

	}

	function read() {

		MLoad::model('ARTestModel');

		$object = ARTestModel::find(1);
		echo $object -> content;

	}

	function update() {

		MLoad::model('ARTestModel');

		$object = ARTestModel::find(1);
		$object -> content = 'MD5 Time String ' . md5(time());
		$object -> save();

	}

	function delete() {

		MLoad::model('ARTestModel');

		$object = ARTestModel::find('last');
		$object -> delete();

	}

}
