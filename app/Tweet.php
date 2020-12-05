<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function like($user = null, $liked = true){
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ],[
            'liked' => $liked,
        ]);
    }

    public function dislike($user = null){
        return $this->like($user, false);
    }

    public function isLikedby(User $user, $liked = true){
//        $this->likes()->where('user_id', $user->id)->exists();
        return (bool) $user->likes()->where('tweet_id', $this->id)->where('liked', $liked)->count();
    }

    public function isDislikedby(User $user){
        return $this->isLikedby($user, false);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function scopewLikes(Builder $query){
        $query->leftJoinSub(
            'select likes.tweet_id, sum(liked) likes, sum(not liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }
}
