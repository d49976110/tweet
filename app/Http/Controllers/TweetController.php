<?php

namespace App\Http\Controllers;

use App\User;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();
        return view('home',['tweets'=>$tweets,'user'=>auth()->user()]);
    }

    public function show(User $user)
    {
        return view('profile.show',['user'=>$user]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'body'=>'required|max:255',
        ]);

        Tweet::create([
            'user_id'=>auth()->id(),
            'body'=>request('body'),
        ]);

        // $tweet = new Tweet;
        // $tweet->user_id = auth()->id();
        // $tweet->fill($request->all());
        // $tweet->save();

        // dd(request('body'));
        // $tweet = new Tweet;
        // // dd($tweet);
        // $tweet->fill($request->all());
        // $tweet->user_id = Auth::id();
        // $tweet->save();
        return redirect()->route('home');

    }
    
    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return redirect()->route('home');

    }
}
