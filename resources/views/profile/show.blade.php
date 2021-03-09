@extends('layouts.app')

@section('content')


<header class="mb-6 relative">
    <h1>
        <img src="/images/default_banner.png" alt="banner">
    </h1>

    {{-- avatar --}}
    {{-- @if($user->avatar == null) --}}
    {{-- <img src="/images/default.png" alt="avatar"
    class="absolute top-1 rounded-full transform -translate-x-1/2 translate-y-1/2"
    style="width:150px; left: 50%;"
    > --}}
    {{-- @else --}}
    {{-- <img src="{{$user->avatar}}" alt="avatar"
    class="absolute top-1 rounded-full transform -translate-x-1/2 translate-y-1/2"
    style="width:180px; left: 50%;"
    > --}}
    {{-- @endif --}}

    {{-- avatar --}}

    <div class="flex justify-between items-center mb-2 mt-6 ">
        <div class="">
            <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
            
            <p class="text-sm mb-1">Joined {{$user->created_at}}</p>
        </div>

        <div class="flex">
            @if(current_user()->is($user))
                <a href="{{$user->path('edit')}}" class="rounded-full border border-gray-300 py-2 px-2 text-black text-sm mr-2">
                    Edit Profile
                </a>
            @endif

            @component('components/follow-button',['user' => $user])

            @endcomponent
            {{-- <x-follow-button :user="$user"> </x-follow-button> --}}
            {{-- <form action="/profile/{{$user->name}}/follow" method="POST">
                @csrf
                <button class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-sm">
                @if (auth()->user()->following($user))
                    Unfollow
                @else
                    Follow me
                @endif

                </button>
            </form> --}}

        </div>
    </div>




    <div class="">
        
        <p class="text-m">

            {{ isset($user->profile) ? $user->profile : "You can write something about yourself by Edit Profile !! "  }}
        </p>
    </div>

</header>
{{-- <div class="mb-5">
    @include('_timeline')
</div> --}}
    



@endsection
