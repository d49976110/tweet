@extends('layouts.app')

@section('content')
        <div class="font-bold mb-6">
            <h1 class="font-bold text-xl mb-4">Explore</h1>
        </div>

        @foreach ($users as $key => $user)
            <div class="flex items-center mb-5">
                {{-- avatar --}}
                {{-- <a href="{{$user->path()}}">
                    <img src='{{$user->avatar}}' alt="{{$user->name}}'s avatar" width="60" class="mr-4">
                </a> --}}
                {{-- avatar --}}

                <div>
                    <a href="{{$user->path()}}">
                        <h4 class="font-bold" >
                            {{'@'.$user->name}}
                        </h4>    
                    </a>
                    
                </div>
            </div>


        @endforeach




@endsection
