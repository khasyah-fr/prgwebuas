<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required value="{{ $user->name }}">

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Avatar</label>
            <div class="flex">
                <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar" required>
                <img class="ml-2" src="{{ $user->avatar }}" alt="" width=50>
            </div>
            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="username" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Username</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" value="{{ $user->username }}" required>

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Email</label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" value="{{ $user->email }}" required>

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Password Confirmation</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </div>
    </form>
</x-app>
