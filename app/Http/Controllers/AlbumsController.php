<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Album;


class AlbumsController extends Controller
{
    //
    public function index()
    {


        //var_dump(\Auth::check());
        //var_dump(\Auth::user());
        //var_dump(\Auth::guest());
        /*
        $albums = Album\Album::with(['cover' => function($query){
            $query->select('album_id','f150_150');
        }])->orderBy('album_id', 'desc')->paginate(10);
        */

        $albums = Album\Album::with('cover')->recent()->paginate(10);

        //print_r($albums);


        //$cover =  Album\Album::find(421)->cover;
        //echo $cover;
        $data = compact('albums');
        return view('album.index', $data);
    }



    public function random()
    {

        $posts = Malbum\Album::where('hide', 0)->get()->random(5);


        $data = compact('posts');
        return view('blog.random', $data);
    }

    public function open($id)
    {
        $album = Album\Album::with('pics')->where('album_id', $id)->get();
        $data = compact('album');
        return view('album.open', $data);
    }
}
