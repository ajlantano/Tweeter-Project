<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Tweet extends Model
{

    protected $fillable = ['body', 'user_id'];
    protected $appends = ['is_liked'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
   {
       return $this->hasMany('App\Comment');
   }

   public function likes()

   {
       return $this->morphMany('App\Like', 'Likeable');
   }

   public function like()
   {
       return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
   }

   public function getIsLikedAttribute()
   {
       $like = $this->likes()->whereUserId(Auth::id())->first();
       return (!is_null($like)) ? true : false;
   }
}
