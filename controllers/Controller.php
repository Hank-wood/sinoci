<?php

class Controller extends CI_Controller {

	protected $_output;

	public function json ($_input) {
		return $this->output
			->set_content_type('json')
			->set_output($_input);
	}

	public function __destruct () {
		if ($this->_output) {
			$this->json($this->_output);
		}
	}

}
