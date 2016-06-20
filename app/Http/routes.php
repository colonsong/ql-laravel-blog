<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
Route::get('/', function(){});
Route::post('/', function(){});
Route::patch('/', function(){});
Route::delete('/', function(){});
Route::get('posts/{id}', function($id)
{
    return 'Post'.$id;
});


Route::get('posts/{name?}', function($name = 'John')
{
    return 'My name is '.$name;
});

Route::get('post/{id}', function($id)
{
    return 'Post '.$id;
});

Route::pattern('id', '[0-9]+');
Route::get('post{id}', function($id))
{
    return 'Post: ' . $id;
});

php artisan route:list

// for another name
Route::get('post/{id}', ['as' => 'posts.show', function(){

});
<a href="{{ route('posts.show', $id)}}"></a>

Route::match(['get', 'post'], '/', function () {
    return 'Hello World';
});

Route::any('foo', function () {
    return 'Hello World';
});

$url = url('foo');

$url = route('profile');

$redirect = redirect()->route('profile');

Route::get('user/{id}/profile', ['as' => 'profile', function ($id) {
    //
}]);

$url = route('profile', ['id' => 1]);

Route::get({'uri'}, function()
{
    return view('{path.view_file_name}');
});



*/







/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['as' => 'blog::','middleware' => ['web']], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'ContentsController@index']);
    Route::get('/blog', ['as' => 'blog_index' , 'uses' => 'ContentsController@index']);
    Route::get('/blog/read/{id}', ['as' => 'read', 'uses' => 'ContentsController@read']);
    Route::get('/blog/random', ['as' => 'random' , 'uses' => 'ContentsController@random']);

    Route::get('/setqueue', ['as' => 'index', 'uses' => 'UserController@sendReminderEmail']);


    Route::get('/info', ['as' => 'blog_index' , 'uses' => 'ContentsController@info']);





});

Route::group(['as' => 'album::','middleware' => ['web']], function () {
  

    Route::get('/album', ['as' => 'index' , 'uses' => 'AlbumsController@index']);

    Route::get('/album/open/{id}', ['as' => 'open' , 'uses' => 'AlbumsController@open']);



});




Route::group(['middleware' => ['web']], function () {

    Route::auth();
    Route::get('admin', ['middleware' => 'auth', function() {
        // 只有認證過的使用者能進來這裡...
        echo 'you have admin permission. *_*';
    }]);



});