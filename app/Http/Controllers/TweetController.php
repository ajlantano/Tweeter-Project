<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Tweet;

class TweetController extends Controller
{
    function __construct()
    {
    $this->middleware('auth', ['except' => ['create', 'store', 'edit', 'update', 'delete']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = \App\Tweet::latest()->paginate(20);

        return view ('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tweet = new \App\Tweet;
        return view('tweets.create', compact('tweet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = $request->old('body');

        $data = $request->validate([
            'body' => 'min:2|max:240'
        ]);

        $data['user_id'] = Auth::id();

        $tweet = \App\Tweet::create($data);

        if($tweet) {
            return redirect('/tweets/' . $tweet->id);
        } else {
            return back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweet = \App\Tweet::find($id);
        return view ('tweets.show', compact('tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet = \App\Tweet::find($id);
        return view('tweets.edit', compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tweet = Tweet::find($id);

        $tweet->body = $request->body;


        if($tweet->save()){
            return redirect('/tweets/' . $tweet->id);
        } else {
            return back();
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tweet = \App\Tweet::destroy($id);

        if($tweet){
            return redirect('/tweets/');
        } else {
            return back();
        }

        $tweet = \App\Tweet\Comment::destroy($id);

        if($tweet){
            return redirect('/tweets/');
        } else {
            return back();
        }
    }




}
