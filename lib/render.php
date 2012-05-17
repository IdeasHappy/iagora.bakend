<?php
class render{
	public function __construct(){

	}
	public function load(){
		$this->header = new coSimpleTemplate("./tpl/header.tpl");
		$this->footer = new coSimpleTemplate("./tpl/footer.tpl");
	}
	public function setAction($array = array()){
		$index = new coSimpleTemplate("./tpl/index.tpl");
		$index->set("header", $this->header);
		$index->set("footer", $this->footer);
	}
	public function put(){

	}
}
