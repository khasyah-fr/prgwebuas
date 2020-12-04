<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @forelse(current_user()->follows as $user)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <a class="flex items-center text-sm" href="{{ route('profile', $user) }}"><img src={{ $user->avatar }} alt="" width="40px" height="40px" class="rounded-full mr-4">
                {{ $user->name }}</a>
        </div>
    </li>
    @empty
        <li>No following yet!</li>
    @endforelse
</ul>
