<?php

class actions{
	private $values;

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
		return  $this->values;
	}
	public function getValues(){
		return $this->values;
	}


}
