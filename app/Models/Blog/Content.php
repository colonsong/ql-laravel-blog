<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //protected $table = 'blogContents';
    // public $incrementing = false;
    protected $primaryKey = 'blogContents_id';

    protected $dates = ['datetime'];

    /**
     * 指定是否模型應該被戳記時間。
     *
     * @var bool
     */
    public $timestamps = false;
}
