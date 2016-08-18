<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    // 不使用 created_at, updated_at
    public $timestamps = false;

    public function scopeLike($query, $key, $val)
    {
        // like 查询
        return $query->where($key, 'like', "%{$val}%");
    }

    public function scopeLikeRaw($query, $key, $val)
    {
        // like 拼接查询
        return $query->whereRaw("{$key} like '%{$val}%'");
    }

    public function scopeOrLike($query, $key, $val)
    {
        // orLike 查询
        return $query->orWhere($key, 'like', "%{$val}%");
    }

    public function scopeOrLikeRaw($query, $key, $val)
    {
        // orLike 拼接查询
        return $query->orWhereRaw("{$key} like '%{$val}%'");
    }

}
