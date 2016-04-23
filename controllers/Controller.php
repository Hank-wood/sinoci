<?php

class Controller extends CI_Controller {

    protected $_output;
    protected $resource;
    protected $layout;

    public function __construct () {
        parent::__construct();
        $this->resource = resource(get_called_class());
    }

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

    public function view ($_view, $_data = []) {
        $view = explode(':', $_view);

        isset($view[1]) &&
            $this->layout = $view[1];

        $layout =
            $this->layout ?:
            strtolower(get_called_class());

        $_data['content'] =
            $this->parser
                ->parse($view[0], $_data, TRUE);

        return file_exists($layout) ?
            $this->parser->parse($layout, $_data, TRUE) :
            $_data['content'];
    }

    public function __destruct () {
        $this->_output &&
            $this->json($this->_output)->_display();
    }

}
