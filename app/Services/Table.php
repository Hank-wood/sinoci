<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

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

}
