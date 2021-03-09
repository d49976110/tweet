<ul>
    <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="{{route('home')}}"
        >
        Home
        </a>
    </li>

    <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="/explore"
        >
        Explore
        </a>
    </li>

    {{-- <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="#"
        >
        Notification
        </a>
    </li>

    <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="#"
        >
        Messages
        </a>
    </li>

    <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="#"
        >
        Bookmarks
        </a>
    </li>

    <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="#"
        >
        Lists
        </a>
    </li> --}}

    <li>
        <a
        class="font-bold test-lg mb-4 block"
        href="{{route('profile',auth()->user()->username)}}"
        >

        Profile
        </a>
    </li>

    <li>

        <form class="" action="/logout" method="post">
            @csrf
            <button class="font-bold test-lg mb-4 block" type="" name="button">Logout</button>
        </form>

    </li>
</ul>
