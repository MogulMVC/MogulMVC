<?php 

class Xml {

	function index() {
		$someArray = simplexml_load_file('http://alanjames1987.com/application.xml');
		
		var_dump($someArray);
	}

}
