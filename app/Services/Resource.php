<?php

namespace App\Services;

class Resource extends Service {

    protected $table;

    public function __construct ($_name = null) {
        parent::__construct();
        $this->table = $_name ?: table($_name);
    }

    public function index ($_input = []) {
        return
            $this->table
                ->where($_input)
                ->paginate();
    }

    public function create () {
        // TODO
        // 1. 添加表单
    }

    public function store ($_input = []) {
        foreach ($_input as $k => $v) {
            $this->table->$k = $v;
        }
        return $this->table->save();
    }

    public function show ($_input = []) {
        return
            $this->table
                ->where($_input)
                ->first();
    }

    public function edit ($_input = []) {
        $resource = $this->show($_input);

        // TODO
        // 1. 修改表单
    }

    public function update ($_where = [], $_update = []) {
        $resource = $this->show($_where);
        foreach ($_update as $k => $v) {
            $resource->$k = $v;
        }
        return $resource->save();
    }

    public function destroy ($_input = []) {
        return
            $this->table
                ->where($_input)
                ->delete();
    }

}
