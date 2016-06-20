<?php


namespace App\Models\Album;


use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    //protected $table = 'blogContents';
    // public $incrementing = false;
    protected $primaryKey = 'albumpic_id';

    protected $dates = ['datetime'];

    /**
     * 指定是否模型應該被戳記時間。
     *
     * @var bool
     */
    public $timestamps = false;


    public function album()
    {
        return $this->belongsTo('App\Models\Album\Album','albumpic_id', 'cover_pic_id');
    }
}
