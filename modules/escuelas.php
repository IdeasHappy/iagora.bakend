<?php
class action extends actions{
	public function index(){
		$this->values = array(array("id_esc" => 4, "nom_esc" => "ES 354-11 LIC. BENITO JUÁREZ","zona_esc" => 1,"sector" => 1,"director" => 'MARÍA DEMETRIA HORTENSIA MÈNDEZ G.',"telefono" => 55602520,"pag_web" => NULL, "email" => NULL,"p_estudios" => "","id_enlace" => NULL,"cct" => '15DES0011Y'),array("id_esc" => 5, "nom_esc" => 'ES 354-17 BENEMÉRITO DE LAS AMÉRICAS',"zona_esc" => 1,"sector" => 1,"director" => 'RICARDO RAFAEL CENICEROS GONZÁLEZ',"telefono" => 55721554,"pag_web" => NULL, "email" => NULL,"p_estudios" => "","id_enlace" => NULL,"cct" => '15DES0017S'));
		return  $this->values;
	}
	public function add(){
		$this->values = array(array("name" => 25));
		return  $this->values;
	}
	public function get($id){
		$this->values = array(array("id_esc" => 4, "nom_esc" => "ES 354-11 LIC. BENITO JUÁREZ","zona_esc" => 1,"sector" => 1,"director" => 'MARÍA DEMETRIA HORTENSIA MÈNDEZ G.',"telefono" => 55602520,"pag_web" => NULL, "email" => NULL,"p_estudios" => "","id_enlace" => NULL,"cct" => '15DES0011Y'));
		return  $this->values;
	}
}
