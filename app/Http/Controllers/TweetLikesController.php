<?php

namespace App\Http\Controllers;

use App\Like;
use App\Tweet;
use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Tweet $tweet)
    {
        $tweet->like();
        // DD($tweet);
        // $like_number = $tweet->likes->where('liked', true)->count();
        // $dislike_number = $tweet->likes->where('liked', false)->count();
        // $like_total = [
        //     'like' =>$like_number,
        //     'dislike' =>$dislike_number,
        // ];
        

        // return $like_total ;

        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tweet $tweet)
    {
        // form
        $tweet->dislike();
        return back();

        //AJAX
        // $tweet->dislike();
        // $like_number = $tweet->likes->where('liked', true)->count();
        // $dislike_number = $tweet->likes->where('liked', false)->count();
        // $like_total = [
        //     'like' =>$like_number,
        //     'dislike' =>$dislike_number,
        // ];
        
        // return $like_total;
        

    }
}


// public function like_number()
// {
//         $like_number = $this->likes->where('liked', true)->count();
//         $dislike_number = $this->likes->where('liked', false)->count();
//         DD($dislike_number);
//         $like_total = [
//             'like' =>$like_number,
//             'dislike' =>$dislike_number,
//         ];
//         return $like_total;
// }