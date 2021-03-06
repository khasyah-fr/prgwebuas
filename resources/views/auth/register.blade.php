<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-16 py-8 bg-blue-100 rounded-2xl">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="username" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Username</label>
                            <input type="text" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="username" id="username" value="{{ old('username') }}" required autocomplete="username">

                            @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="name" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Name</label>
                            <input type="text" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="name" id="name" value="{{ old('name') }}" required>

                            @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Email</label>
                            <input type="email" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Password</label>
                            <input type="password" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="password" id="password" required autocomplete="new-password">

                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password-confirm" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Password Confirmation</label>
                            <input type="password" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">

                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <button type="submit"
                                    class="mr-2 bg-blue-400 text-white rounded-2xl py-2 px-4 hover:bg-blue-500">Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
