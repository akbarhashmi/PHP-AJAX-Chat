<?php


class Core{

	protected $db, $result; //Protected so that they can be accessed only by inheritance 
	private $rows;

	public function __construct(){
		$this->db= new mysqli('localhost','root','root','chatdb');


	}

	public function query($sql){
		$this->result = $this->db->query($sql);

	}

	public function rows(){ //loops through rows returned fro the query
		for($x=1; $x <= $this->db->affected_rows; $x++){
			$this->rows[] = $this->result->fetch_assoc();
		}

		return $this->rows;

	}
}