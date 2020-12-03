@extends('components.app')

@section('content')
    <header class="mb-6">
        <img class="rounded-3xl mb-2" src="/images/banner-profil.png" alt="">

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <h2 class="text-sm">Since {{ $user->created_at->diffForHumans() }}</h2>
            </div>

            <div>
                <a class="rounded-full border border-gray-200 py-2 px-2 text-black text-xs mr-2">Edit profile</a>
                <a class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow</a>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aut beatae consequatur ducimus eveniet laboriosam nam, nostrum, possimus provident, quae ratione temporibus. Aspernatur cumque deserunt dolor dolore expedita, facilis, incidunt inventore iure molestias natus nostrum officia omnis qui quibusdam rerum similique temporibus totam vitae voluptas voluptatibus! Magnam, nemo ullam.</p>
        <img src="{{ $user->avatar }}" alt="" class="absolute rounded-full mr-2" style="width: 140px; left: calc(47% - 70px); top:32%;">

    </header>

    @include('_timeline', [
      'tweets' => $user->tweets
    ])
@endsection
