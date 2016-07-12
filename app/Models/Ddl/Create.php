<?php

namespace App\Models\Ddl;

use Illuminate\Database\Capsule\Manager;

trait Create {
    
    function create ($_input) {
        array_filter($_input, [ $this, '_createTable' ], true);
    }

    private function _createTable ($_columns, $_table) {
        Manager::schema()->hasTable($_table) OR
            Manager::schema()->create($_table, function ($table) use ($_columns) {
                $this->_createColumns($table, $_columns);
                $table->increments('id');
                $table->timestamps();
                $table->softDeletes();
            });
    }

    private function _createColumns ($_table, $_columns) {
        foreach ($_columns as $name => $attributes) {
            if (is_string($attributes)) {
                $attributes = explode(' ', $attributes);
            }
            list($name, $attributes[0]) = [ $attributes[0], $name ];
            call_user_func_array([ $_table, $name ], $attributes);
        }
    }

}