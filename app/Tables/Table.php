<?php

namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

    protected $db;
    protected $guarded = [];
    public $timestamps = false;

    public function scopeLike ($query, $_key, $_value) {
        return $query->where($_key, 'like', "%{$_value}%");
    }

    public function scopeLikeRaw ($query, $_key, $_value) {
        return $query->whereRaw("{$_key} like '%{$_value}%'");
    }

    public function scopeOrLike ($query, $_key, $_value) {
        return $query->orWhere($_key, 'like', "%{$_value}%");
    }

    public function scopeOrLikeRaw ($query, $_key, $_value) {
        return $query->orWhereRaw("{$_key} like '%{$_value}%'");
    }

    public function scopeGetAll ($query, $_where = []) {
        return $query->where($_where)->orderBy($this->primaryKey, 'desc')->paginate();
    }

    public function scopeFindOne ($query, $_where = []) {
        return $query->where($_where)->first() ?: $this->newInstance($_where);
    }

    public function getIdAttribute () {
        return $this->{$this->primaryKey};
    }

}
