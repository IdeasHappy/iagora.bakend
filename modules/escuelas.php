<?php
class action extends actions{
	public function index(){
		return array();
	}
	public function add(){
		return array(array("name" => 25));
	}
	public function get($id){
		return array(array("name" => 25));
	}
}
