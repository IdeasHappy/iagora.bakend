<?php
class render{
	public function __construct(){

	}
	public function load(){
		$header = new coSimpleTemplate("./tpl/header.tpl");
		$footer = new coSimpleTemplate("./tpl/footer.tpl");
	}
	public function setAction($array = array()){
		$index = new coSimpleTemplate("./tpl/index.tpl");
		$index->set("header", $header);
		$index->set("footer", $footer);
	}
	public function put(){

	}
}
