<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LikeController extends Controller
{
    public function handleLike($id, $type)
    {
        if($type == 'tweet')
        {
            $type = 'App\Tweet';
        }
        else
        {
            $type = 'App\Comment';
        }
        $like=\App\Like::where([
            ['likeable_id', $id],
            ['likeable_type', $type],
            ['user_id', Auth::id()]
        ])->first();

        if($like) {
            $like->delete();
        }

        else {
            $like = \App\Like::create([
                'likeable_id' => $id,
                'likeable_type' => $type,
                'user_id' => Auth::id()
            ]);
        }
        if ($like) {
            return back();
        }


    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('login');
    }
}
