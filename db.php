<?php
class db{
	public function __construct(){
		$configDB = new configDB();
		$this->prefix = $configDB->prefix;
		$this->mysqli = mysqli_connect($configDB->host, $configDB->user,$configDB->password, $configDB->db);
	}
	public function execute($query){
		$res = mysqli_query($this->mysqli, $query);
		$row = mysqli_fetch_assoc($res);
		return $row();
	}
	public function getPrefix(){
		return $this->prefix;
	}
}
	
