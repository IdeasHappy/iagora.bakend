<?php
class render{
	public function __construct(){

	}
	public function load(){
		$this->header = new coSimpleTemplate("./tpl/header.tpl");
		$this->footer = new coSimpleTemplate("./tpl/footer.tpl");
	}
	public function setModule($module){
		$this->module = $module;
	}
	public function setAction($action){
		$this->action = $action;
	}
	public function put($array = array(array())){
		$this->index = new coSimpleTemplate("./tpl/index.tpl");
		$this->index->set("header", $this->header->output());
		$this->index->set("footer", $this->footer->output());
		$this->action = new coSimpleTemplate("./modules/" . $this->module . "/" . $this->action ".tpl");
		$this->index->set("action", $this->action->output());
	}

	public function render(){
		echo($this->index->output());
	}
}
