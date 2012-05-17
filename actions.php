<?php

class actions{
	private $values = array(array("name" => 25),array("name" => 25));

	public function __construct(){
		$values = array(array());
	}
	private function dbQuery($query){
		return array();
	}
	private function sanitiseText($text){
		return $text;
	}
	private function sanitiseNumber($number){
		return $number;
	}
	public function index(){
		$this->values = array(array("hola" => "goto"));
	}
	public function getValues(){
		return $this->values;
	}


}
