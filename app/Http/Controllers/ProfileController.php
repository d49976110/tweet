<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show',['user'=>$user]);
    }

    public function edit(User $user)
    {
        if(auth()->user()->is($user)){
            return view('profile.edit',['user'=>$user]);
        }
        return abort(404);
    }

    public function update(Request $request,User $user)
    {

        // $request->validate([
        //     'name'=>['string','required','max:255'],
        //     'username'=>['string','required','max:255',Rule::unique('users')->ignore($user)],
        //     'email'=>['string','required','email','max:255'],
        //     'password'=>['string','required','min:1','max:255','confirmed'],
        // ]);

        // $data = $request->all();
        // DD($data);
        // foreach($data as $key => $value){
        // dump($value);
        // }
        // DD(collect($request));

        // //update寫法一，用fill
        //
        // $user->fill($request->all());
        // //upload avatar
        // $path = request('avatar')->store('public');
        // $path = str_replace('public/',"/storage/",$path);
        // $user->avatar = $path;
        // $user->save();

        //update寫法二
        
        $attributes = $request->validate([
            'name'=>['string','required','max:255'],
            'username'=>['string','required','max:255',Rule::unique('users')->ignore($user)],
            'email'=>['string','required','email','max:255'],
            'profile'=>['string'],
            // 'password'=>['string','required','min:1','max:255','confirmed'],
        ]);
        // DD($attributes);
        if(request('avatar')){
            $path =$request->file('avatar')->store('avatar');
            // $path = str_replace('public','storage',$path);
            
            $attributes['avatar'] = $path ; 
        }

        $user->update($attributes);




        return redirect($user->path());
    }
}
