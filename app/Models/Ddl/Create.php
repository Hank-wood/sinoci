<?php

namespace App\Models\Ddl;

use Illuminate\Database\Capsule\Manager;

trait Create {
    
    function create ($_input) {
        foreach ($_input as $table => $columns) {
            Manager::schema()->hasTable($table) OR
                Manager::schema()->create($table, function ($table) use ($columns) {
                    $table->increments('id');
                    $table->timestamps();
                    $table->softDeletes();
                    foreach ($columns as $name => $attributes) {
                        list($name, $attributes[0]) = [$attributes[0], $name];
                        call_user_func_array([$table, $name], $attributes);
                    }
                });
        }
    }
}