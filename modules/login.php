<?php
class action extends actions{
	public function form(){
		echo "basura";
		$this->values = array(array("name" => "write name"),array("password" => "write password"));
	}
	public function validate(){
		$this->values = array(array("name" => 25));
	}
}
