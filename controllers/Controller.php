<?php

class Controller extends CI_Controller {

    protected $_output;
    protected $layout;

    public function __construct () {
        parent::__construct();
    }

    public function get ($_key = null, $_value = null) {
        return
            $this->input->get($_key) ?:
            $_value;
    }

    public function post ($_key = null, $_value = null) {
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

        $_input instanceof \Illuminate\Pagination\AbstractPaginator &&
            $_input = $_input->getCollection();

        is_array($_input) &&
            $_input = json_encode($_input);

        func_get_arg(0) === $_input OR
            $this->output->set_content_type('json');

        return $this->output->set_output($_input);
    }

    public function view ($_view, $_data = []) {
        $view = explode(':', $_view);

        isset($view[1]) &&
            $this->layout = $view[1];

        $layout =
            $this->layout ?:
            strtolower(get_called_class());

        $_data['content'] =
            $this->parser->parse($view[0], $_data, true);

        return file_exists($layout) ?
            $this->parser->parse($layout, $_data, true) :
            $_data['content'];
    }

    public function __destruct () {

        getenv('APP_DEBUG') && ! $this->input->is_ajax_request() &&
            $this->output->enable_profiler(true);

        $this->_output &&
            $this->json($this->_output)->_display();
    }

}
