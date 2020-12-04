<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
    </li>

    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
    </li>

    <li>
        <a href="{{ route('profile', auth()->user())   }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>

    <li>
        <form method="POST" action="/logout">
            @csrf

        </form>
        <button class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow py-2 px-2 text-white">Logout</button>
    </li>
</ul>
