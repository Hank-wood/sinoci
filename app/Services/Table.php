<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    public function scopeLike($query, $key, $val)
    {
        return $query->where($key, 'like', "%{$val}%");
    }

    public function scopeLikeRaw($query, $key, $val)
    {
        return $query->whereRaw("{$key} like '%{$val}%'");
    }

    public function scopeOrLike($query, $key, $val)
    {
        return $query->orWhere($key, 'like', "%{$val}%");
    }

    public function scopeOrLikeRaw($query, $key, $val)
    {
        return $query->orWhereRaw("{$key} like '%{$val}%'");
    }

}
