<?php
class action extends actions{
	public function index(){
		$this->values = array(, array("name" => 25, "apellido" => 26),array("name" => 26));
		return  $this->values;
	}
	public function add(){
		$this->values = array(array("name" => 25));
		return  $this->values;
	}
	public function get($id){
		$this->values = array(array("name" => 25));
		return  $this->values;
	}
}
