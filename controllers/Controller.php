<?php

class Controller extends CI_Controller {

	protected $_output;

	public function json ($_input) {
		return $this->output
			->set_content_type('json')
			->set_output($_input);
	}

    public function get ($_key, $_value) {
        return isset($_GET[$_key]) ?
            $_GET[$_key] :
            $_value;
    }

    public function post ($_key, $_value) {
        return isset($_POST[$_key]) ?
            $_POST[$_key] :
            $_value;
    }

	public function __destruct () {
		if ($this->_output) {
			$this->json($this->_output)->_display();
		}
	}

}
