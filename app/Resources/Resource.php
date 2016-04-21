<?php

namespace App\Resources;

class Resource {

    protected $table;

    public function __construct ($_name = '') {
        $table = $_name ?: ($this->table ?: substr(get_called_class(), 14));
        $this->table = table($table);
    }

	protected function index ($_input = []) {
        return $this->table->getAll();
    }

	protected function create ($_input = []) {}

	protected function store ($_input = []) {
        foreach ($_input as $k => $v) {
            $this->table->$k = $v;
        }
        return $this->table->save();
    }

	protected function show ($_input = []) {
        return $this->table->findById($_input['id']);
    }

	protected function edit ($_input = []) {}

	protected function update ($_input = []) {}

	protected function patch ($_input = []) {}

	protected function destroy ($_input = []) {}

    public function __call ($_func, $_args) {
        return call_user_func_array([$this, $_func], $_args);
    }

    static function __callStatic ($_func, $_args) {
        return call_user_func_array([new static, $_func], $_args);
    }

}
