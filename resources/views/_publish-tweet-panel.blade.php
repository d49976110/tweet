{{-- form home.blade --}}

<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form class="" action="/tweets" method="post">
        @csrf
        <textarea name="body"
        class="w-full p-3"
        placeholder=
        "How are you today? 
    I want to join you !!"
        >
        </textarea>

        <hr class="my-4">

       
        <footer class="flex justify-between">
            
            {{-- avatar --}}
            <img src="{{$user->avatar}}" width="50" alt=""
            class="rounded-full mr-2"
            >
            {{-- avatar --}}
            
            <button class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"  name="button">
                Post Something Great !
            </button>


        </footer>

        <div>
            {{-- @if ($errors->any())
                <div class="text-red-500 text-sm mt-2">
                    <ul>
                            @foreach ($errors->all() as $key => $error)
                                <li>
                                     {{$error}}
                                </li>
                            @endforeach
                    </ul>
                </div>
            @endif --}}

            @error('body')
                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror
        </div>
    </form>

</div>
