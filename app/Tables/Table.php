<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

    protected $db;
    public $itmestamps = FALSE;

    public function __construct () {
        parent::__construct();
        $CI =& get_instance();
        $CI->load->database();
        $this->db = $CI->db;
    }

}
