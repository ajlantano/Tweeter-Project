<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route:: middleware (['auth'])->group(function(){

    Route:: get('/login', function(){
        return redirect(route('login'));
    });

Route::get('/', function(){
    return redirect('/tweets');
});

Route::resource('/tweets', 'TweetController' );
Route::get('/tweets/{tweet}/comments/{comment}/edit', 'CommentController@edit');
Route::post('/tweets/{tweet}/comments', 'CommentController@store')->name('comment.add');
Route::delete('/tweets/{tweet_id}/comments/{comment_id}', 'CommentController@destroy');
Route::put('/tweets/{tweet}/comments/{comment}', 'CommentController@update');
Route::get('/likes/{like_id}/{like_type}','LikeController@handleLike');

Route::resource('/profiles', 'ProfileController');
Route::get('/profiles', function(){
    return redirect('/profiles/' . Auth::id() );
});

Route::get('/tweets-api',function(){
    $perpage = 10;
    if(request()->page){
        $page = request()->page;
    } else{
        $page = 1;
    }
    $tweets = \App\Tweet::with(['user'])->offset($perpage * ($page-1))->limit(20)->get();
    return $tweets;
})->middleware(['cors']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
