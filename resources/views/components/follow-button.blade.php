@if(current_user()->isnot($user))
    <form action="/profile/{{$user->username}}/follow" method="POST">
        @csrf
        <button class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-sm">
        @if (current_user()->following($user))
            Unfollow
        @else
            Follow me
        @endif

        </button>
    </form>
@endif
