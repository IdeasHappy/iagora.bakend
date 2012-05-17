<?php
class route{
	private base_url;
	private module;
	private action;
	private params;
	public function __construct(){
		if(isset($_SERVER["PATH_INFO"]){
			$url = explode("/", $_SERVER["PATH_INFO"]);
			$urlLong = count($url);
			$this->baseUrl;
			$this->module = $url[0];
			$this->action = $url[1];
			if($urlLong > 2){
				
			}
			$this->params = array();
		}else{
			$this->baseUrl;
			$this->module = "login";
			$this->action = "form";
			$this->params = array();
		}
	}
	private function parseParams(){
		$this->params = array();
	}
	public function getBaseUrl(){
		return $this->baseUrl;
	}
	public function getModule(){
		return $this->module;
	}
	public function getAction(){
		return $this->action;
	}

/*
http://localhost/login/logout/comper/21

$this->base_url = "http://localhost/";
		$this->module = "login";
		$this->action = "logout";
		$this->params = array("comper" => 21,);
*/
}
