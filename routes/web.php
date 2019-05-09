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
Route:: get('/marketing', function(){
    return view ('/marketing');
});

Route:: middleware (['auth'])->group(function(){
Route::get('/', function(){
    return redirect('/tweets');
});
Route::get('/profiles/{profile}/followers', 'ProfileController@followers');
Route::get('/profiles/{profile}/following', 'ProfileController@following');
Route::get('/profiles/{profile}/follow', 'ProfileController@follow');
Route::get('/profiles/{profile}/unfollow', 'ProfileController@unfollow');
Route::get('/who-to-follow','ProfileController@suggest');
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
