<?php
class coSimpleTemplate {
	protected $file;
	protected $values = array();
	public function __construct($file) {
		$this->file = $file;
	}
	
	public function set($key, $value) {
		$this->values[$key] = $value;
	}
	
	public function output() {
		if (!file_exists($this->file)) {
			return 'Error loading template file (' .$this->file. ').' . "\r\n";
		}
		$output = file_get_contents($this->file);
		foreach ($this->values as $key => $value) {
			$tag = '[@' . $key . ']';
			$output = str_replace($tag, $value, $output);
		}
		return $output;
	}
}
