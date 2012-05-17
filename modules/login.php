<?php
class action extends actions{
	public function form(){
		$this->values = array();
	}
	public function validate(){
		$this->values = array(array("name" => 25));
	}
}
