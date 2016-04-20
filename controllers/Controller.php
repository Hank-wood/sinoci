<?php

class Controller extends CI_Controller {

    protected $_output;

    public function get ($_key = NULL, $_value = NULL) {
        return
            $this->input->get($_key) ?:
            $_value;
    }

    public function post ($_key = NULL, $_value = NULL) {
        if ($this->method() !== 'post') {
            return
                $this->input->input_stream($_key) ?:
                $_value;
        }
        return
            $this->input->post($_key) ?:
            $_value;
    }

    public function method () {
        return $this->input->method();
    }

    public function json ($_input) {
        is_array($_input) &&
            $_input = json_encode($_input);

        return $this->output
            ->set_content_type('json')
            ->set_output($_input);
    }

    public function __destruct () {
        $this->_output &&
            $this->json($this->_output)->_display();
    }

}
