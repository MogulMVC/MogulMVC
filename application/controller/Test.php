<?php 

class Test {

	function index() {

		MLoad::php_framework('core/util/MCache');
		MCache::cache(10);
		
		echo time();

	}

}
