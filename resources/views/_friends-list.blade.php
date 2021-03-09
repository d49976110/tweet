<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-5">
            <div class="flex items-center text-lg ">
                {{-- <div class="">
                    <a href="{{route('profile',$user)}}">
                        <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2" width="30">
                    </a>
                </div> --}}


                <div>
                    <a href="{{route('profile',$user)}}">
                        @ {{$user->name}}
                    </a>
                </div>

            </div>
        </li>
    @endforeach
</ul>
