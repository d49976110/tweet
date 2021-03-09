<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = ['user_id','body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function isLikeBy(User $user)
    {
        return (bool) $this->likes->where('user_id',$user->id)->where('liked',true)->count();

    }

    public function disLikeBy(User $user)
    {
        return (bool) $this->likes->where('user_id',$user->id)->where('liked',0)->count();

    }

    public function like()
    {
        $this->likes()->updateOrCreate(
            ['user_id'=>auth()->id(),],
            ['liked'=>true,],
        );
    }

    public function dislike()
    {
        $this->likes()->updateOrCreate(
            ['user_id'=>auth()->id(),],
            ['liked'=>false,],
        );
    }


    public function likes()
    {
        return $this->hasMany('App\Like');
    }


}
