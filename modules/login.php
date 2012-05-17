<?php
class action extends actions{
	public function form(){
		$this->values = array(array("name" => "write name"),array("password" => "write password"));
		return  $this->values;
	}
	public function validate(){
		$this->values = array(array("name" => 25));
		return  $this->values;
	}
}
