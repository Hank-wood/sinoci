<?php

namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

    protected $db;
    public $timestamps = FALSE;

    public function scopeGetAll ($query) {
        return $query->paginate();
    }

    public function scopeFindById ($query, $_id) {
        return $query->findOrFail($_id);
    }

}
