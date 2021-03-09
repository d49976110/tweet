<div class="border border-gray-300 rounded-lg mb-10">

    @foreach (auth()->user()->allposts() as $key => $tweet)
            @include('_tweet')
    @endforeach

</div>
