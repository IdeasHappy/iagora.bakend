<?php
class action extends actions{
	public function index(){
		$this->values = array(array("name" => 25),array("name" => 25));
	}
	public function add(){
		$this->values = array(array("name" => 25));
	}
	public function get($id){
		$this->values = array(array("name" => 25));
	}
}
