{{-- from _timeline.blade --}}
<div class="flex p-4 border-b border-b-gray-40 ">
    <a href="/profile/{{ $tweet->user->username }}">
        <div class="mr-2 flex-shrink-0">
            {{-- <img src="{{$user->avatar}}" alt="avatar"
            class="rounded-full ml-4 mr-4" width="50"
            > --}}
        </div>
    </a>


    <div class="ml-4">
        {{-- tweet username --}}
        <a href="{{ route('profile', $tweet->user->username) }}">
            <h5 class="font-bold mb-1">{{ $tweet->user->name }}</h5>
        </a>
        {{-- tweet username --}}

        {{-- tweet body --}}
        <div class="tweet-body flex">
            <p class="text-sm mr-10 mt-1">
                {{ $tweet->body }}
            </p>
            {{-- <form class="tweetEditForm" action="">
                <input type="text" name="content" value="">
                <button>Submit</button>
            </form> --}}
            {{-- <button onclick="edit_tweet(event)">Edit</button> --}}

        </div>
        {{-- tweet body --}}

        <div class="flex">
            {{-- like & dislike --}}
            <div class="flex mt-3 mr-10">
                {{-- <div class="flex items-center text-gray-500"> --}}
                <div
                    class="flex items-center {{ $tweet->isLikeBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500 ' }}">
                    <form class="" action="/tweets/{{ $tweet->id }}/like" method="post">
                        @csrf

                        <button type="submit" name="button" action="/tweets/{{ $tweet->id }}/like">
                            {{-- <button type="button" name="button" action="/tweets/{{ $tweet->id }}/like"
                            onclick="addlike(event)"> --}}
                            <svg viewBox=" 0 0 20 20" class="mr-1 w-3">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g class="fill-current">
                                        <path
                                            d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.0000002,1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,18.1243554 C2.68509206,19.1602453 3.90195042,20 5.00853025,20 L12.9914698,20 C14.1007504,20 15,19.1125667 15,18.000385 L15,10 L12,3 L12,0 L11.0010436,0 L11.0010436,0 Z M17,10 L20,10 L20,20 L17,20 L17,10 L17,10 Z"
                                            id="Fill-97"></path>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <span id="like">

                            {{ $tweet->likes->where('liked', true)->count() }}

                        </span>

                    </form>
                </div>

                {{-- <div class="flex items-center text-gray-500"> --}}
                <div
                    class="flex items-center {{ $tweet->disLikeBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500' }}">
                    <div class="">
                        <form class="" action="/tweets/{{ $tweet->id }}/like" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" name="button" action="/tweets/{{ $tweet->id }}/like">
                                {{-- <button type="button" name="button" action="/tweets/{{ $tweet->id }}/like"
                        onclick="dislike(event)"> --}}
                                <svg viewBox=" 0 0 20 20" class="ml-3 mr-1 w-3">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g class="fill-current">
                                            <path
                                                d="M11.0010436,20 C9.89589787,20 9.00000024,19.1132936 9.0000002,18.0018986 L9,12 L1.9973917,12 C0.894262725,12 0,11.1122704 0,10 L0,8 L2.29663334,1.87564456 C2.68509206,0.839754676 3.90195042,8.52651283e-14 5.00853025,8.52651283e-14 L12.9914698,8.52651283e-14 C14.1007504,8.52651283e-14 15,0.88743329 15,1.99961498 L15,10 L12,17 L12,20 L11.0010436,20 L11.0010436,20 Z M17,10 L20,10 L20,0 L17,0 L17,10 L17,10 Z"
                                                id="Fill-97"></path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <p id="dislike">
                        {{ $tweet->likes->where('liked', false)->count() }}
                    <p>


                </div>



            </div>
            {{-- like & dislike --}}

            {{-- tweet delete --}}
            @if ($tweet->user_id == auth()->id())
                <div class="mt-3 ">
                    <form action="/tweets/{{ $tweet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button
                            class="rounded-full border border-gray-300 py-2 px-2 text-black text-sm mr-2 text-red-600">
                            Delete
                        </button>
                    </form>

                </div>
            @endif

            {{-- tweet delete --}}
        </div>


    </div>


</div>
