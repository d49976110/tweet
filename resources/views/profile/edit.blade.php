@extends('layouts.app')

@section('content')
<form class="" action="/profile/{{$user->username}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            name
        </label>

        <input id="name" type="text" class="border border-gray-400 p-2 w-full" name="name" value="{{$user->name}}">

        @error('name')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div>

    <div class="mb-6">
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            username
        </label>


        <input value="{{$user->username}}"  type="text" class="border border-gray-400 p-2 w-full" name="username">

        @error('username')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div>

    {{-- <div class="mb-6">
        <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            avatar
        </label>


        <input value="{{$user->avatar}}"  type="file" class="border border-gray-400 p-2 w-full" name="avatar">

        @error('avatar')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div> --}}


    <div class="mb-6">
        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            email
        </label>


        <input value="{{$user->email}}" id="email" type="email" class="border border-gray-400 p-2 w-full" name="email">

        @error('email')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div>


    {{-- profile --}}
    <div class="mb-6">
        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Profile
        </label>


        <textarea rows="8" cols="80" value="{{$user->profile}}" id="profile" type="text" class="border border-gray-400 p-2 w-full" name="profile"></textarea>

        @error('profile')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div>

    {{-- profile --}}

    {{-- password --}}

    {{-- <div class=" mb-6 ">
        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            password
        </label>


        <input value="" id="password" type="password" class="border border-gray-400 p-2 w-full" name="password">

        @error('password')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div> --}}

    {{-- <div class=" mb-6 ">
        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            password confirmation
        </label>


        <input value="" type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation">

        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">
                <strong>{{ $message }}</strong>
            </p>
        @enderror

    </div> --}}

    {{-- password --}}

    <div class="mb-6">
        <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            Submit
        </button>

    </div>
</form>


@endsection
