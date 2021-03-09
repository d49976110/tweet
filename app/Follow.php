<?php
namespace App;

trait Follow{

    public function following(User $user)
    {
        return $this->follows->contains($user);
    }

    public function toggleFollow(User $user)
    {
        if ($this->following($user)){
            return $this->unfollow($user);
        }
        else{
            return $this->follow($user);
        }
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function follows()
    {
        return $this->belongsToMany('App\User','follower_user','user_id','follower_id');
    }

}
