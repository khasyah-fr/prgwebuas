<x-app>
    <div class="grid grid-cols-3 gap-2">
        @foreach($users as $user)
            <a href="{{ $user->path() }}">
            <div class="flex items-center mb-5">
                <img class="mr-4" src="{{ $user->avatar }}" alt="{{ $user->username }}" style="width: 60px; height: 60px;">
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
            </div>
            </a>
        @endforeach

        {{ $users->links('pagination::tailwind') }}
    </div>
</x-app>
