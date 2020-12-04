<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include('_tweets-panel')
        @empty
        <p class="p-4">There is no tweets yet.</p>
    @endforelse

    {{$tweets->links('pagination::tailwind')}}
</div>
