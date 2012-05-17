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
	public function put($input = array(array("id"))){
		$this->index = new coSimpleTemplate("./tpl/index.tpl");
		$this->index->set("header", $this->header->output());
		$this->index->set("footer", $this->footer->output());
		$this->actionTpl = new coSimpleTemplate("./tpl/modules/" . $this->module . "/" . $this->action . ".tpl");
		$iterator = new coSimpleTemplate("./tpl/modules/" . $this->module . "/" . $this->action . ".itr.tpl");
		foreach ($input as $valor) {
			print_r($valor);
		}
		$this->index->set("action", $this->actionTpl->output());
	}

	public function render(){
		echo($this->index->output());
	}
}
