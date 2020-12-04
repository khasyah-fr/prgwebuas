<x-app>
    <header class="mb-6">
        <div class="relative">
            <img class="rounded-3xl mb-2" src="/images/banner-profil.png" alt="">
            <img src="{{ $user->avatar }}" alt="" class="absolute rounded-full mr-2 bottom-0 transform -translate-x-1/2 translate-y-1/2 border-4 border-blue-400 bg-white" style="left: 50%; width: 140px; height: 140px;">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <h2 class="text-sm">Since {{ $user->created_at->diffForHumans() }}</h2>
            </div>

            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-200 py-2 px-2 text-black text-xs mr-2">Edit profile</a>
                @endcan
                <x-follow :user="$user"></x-follow>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut beatae consequatur ducimus eveniet laboriosam nam, nostrum, possimus provident, quae ratione temporibus. Aspernatur cumque deserunt dolor dolore expedita, facilis, incidunt inventore iure molestias natus nostrum officia omnis qui quibusdam rerum similique temporibus totam vitae voluptas voluptatibus! Magnam, nemo ullam.</p>

    </header>

    @include('_timeline', [
      'tweets' => $user->tweets
    ])
</x-app>
