<?php

class ExampleVO {

	public $id;
	public $created;
	public $updated;

	function __construct() {
		MLoad::php_framework('core/util/MDate');
		$this -> created = MDate::datetime();
		$this -> updated = MDate::datetime();
	}

}
