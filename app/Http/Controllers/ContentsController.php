<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog as Mblog;


class ContentsController extends Controller
{
    //
    public function info()
    {
        var_dump(\Auth::check());
        var_dump(\Auth::user());
        var_dump(\Auth::guest());
        echo 'app_path'.app_path().'<BR/>';
        echo 'base_path'.base_path().'<BR/>';
        echo 'config_path'.config_path().'<BR/>';
      //  echo 'elixir'.elixir().'<BR/>';
      //  echo 'storage_path'.storage_path().'<BR/>';
    }

    public function index()
    {





        $posts = Mblog\Content::where('hide', 0)
            ->orderBy('blogContents_id', 'desc')
            ->paginate(10);



        $data = compact('posts');
        return view('blog.index', $data);
    }

    public function read($id)
    {

        $posts = Mblog\Content::where('hide', 0)
            ->where('blogContents_id', $id)
            ->orderBy('blogContents_id', 'desc')
            ->get();


        $data = compact('posts');
        return view('blog.post', $data);
    }

    public function random()
    {

        $posts = Mblog\Content::where('hide', 0)->get()->random(5);


        $data = compact('posts');
        return view('blog.random', $data);
    }
}
