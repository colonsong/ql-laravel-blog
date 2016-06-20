<?php

namespace App\Models\Album;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //protected $table = 'blogContents';
    // public $incrementing = false;
    protected $primaryKey = 'album_id';

    protected $dates = ['datetime'];

    /**
     * 指定是否模型應該被戳記時間。
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * get pics
     */
    public function cover()
    {
        return $this->hasOne('App\Models\Album\Pic','albumpic_id', 'cover_pic_id');
        //return $this->belongsTo('App\Models\Album\Pic','cover_pic_id', 'albumpic_id');
    }
    public function pics()
    {
        return $this->hasMany('App\Models\Album\Pic','album_id', 'album_id');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('album_id', 'desc');
    }





}
