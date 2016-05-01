<?php

namespace App\Services;

class Email extends Service {

    protected $email;

    public function __construct () {
        parent::__construct();
        $this->CI->load->library('email');
        $this->email = $this->CI->email;
    }

    public function send ($_input) {
        $this->email->from($_input['from'][0], $_input['from'][1]);
        $this->email->to($_input['to']);
        $this->email->subject($_input['subject']);
        $this->email->message($_input['message']);
        $this->email->send();
    }

}
