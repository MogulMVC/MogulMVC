<?php 

class Sidebar {

	function index() {
		$data['page_title'] = 'SideBar';
		MLoad::view('sidebar.php', $data);
	}

}
