<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Tweet;
use App\Comment;


class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $comment = new \App\Comment;
        $comment->body = $request->get('comment_body');
        $comment->user_id = Auth::id();
        $comment->tweet_id = $id;

        if($comment->save()){
            return redirect('/tweets/' . $id);
        } else {
            return back();
        }
    }

    public function edit($tweet_id, $comment_id)
    {
        $comment = \App\Comment::find($comment_id);

        return view('tweets.comment.edit', compact('comment'));
    }

    public function update(Request $request, $tweet_id, $comment_id)
    {

        $comment = Comment::find($comment_id);

        $comment->user_id = Auth::id();
        $comment->body = $request->body;

        if($comment->save()){
            return redirect('/tweets/' . $tweet_id . '/');
        } else {
            return back();
        }
    }
    public function destroy ($tweet_id, $comment_id)
    {
        $delete = \App\Comment::destroy ($comment_id);
            if ($delete){
                return redirect('/tweets/' . $tweet_id . '/');
            } else {
                return back();
            }
    }

    


}
