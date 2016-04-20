<?php

namespace App\Resources;

class Resource {

    protected $table;

    public function __construct ($_name = '') {
        $table = $_name ?: ($this->table ?: __CLASS__);
        $this->table = table($table);
    }

	static function index ($_input = []) {
        return $this->table->getAll();
    }

	static function create ($_input = []) {}

	static function store ($_input = []) {}

	static function show ($_input = []) {
        return $this->table->findById($_input['id']);
    }

	static function edit ($_input = []) {}

	static function update ($_input = []) {}

	static function patch ($_input = []) {}

	static function destroy ($_input = []) {}

}
