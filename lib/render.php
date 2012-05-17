<?php
class render{
	public function __construct(){

	}
	public function load(){
		$this->header = new coSimpleTemplate("./tpl/header.tpl");
		$this->footer = new coSimpleTemplate("./tpl/footer.tpl");
	}
	public function setAction($array = array()){
		$this->index = new coSimpleTemplate("./tpl/index.tpl");
		$this->index->set("header", $this->header->output());
		$this->index->set("footer", $this->footer->output());
	}
	public function put(){

	}
	public function render(){
		echo($this->index->output());
	}
}
