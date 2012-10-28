<?php

class MDatabase {
	
	public $connection;
	public $table;
	
	public function create($object) {
		
		// Write from this object to a database and table
		// $this->connection
		// $this->table
		// $object
		
	}
	
	public function read($where) {
	
		// Read an object from a database and tabel to this
		// $this->connection
		// $this->table
		// array $where
		
	}
	
	public function read_oldest(){
		
	}
	
	public function read_newest(){
		
	}
	
	public function update($object) {
	
		// Update from this object to a database and table
		// $this->connection
		// $this->table
		// $object
		
	}
	
	public function delete($object) {
		
		// Delete this object from the database and table
		// $this->connection
		// $this->table
		// $object
		
	}
	
}
