<x-master>
    <div class="container mx-auto flex justify-center">
        <div class=" px-16 py-8 bg-blue-100 rounded-2xl">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Email</label>
                            <input type="email" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Password</label>
                            <input type="password" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="password" id="password" required autocomplete="current-password">

                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div>
                                <input type="checkbox" class="mr-1" name="remember" id="remember" {{ old('remember' ? 'checked' : '') }}>
                                <label class="text-gray-700 text-xs font-bold uppercase" for="remember">Remember me</label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="mr-2 bg-blue-400 text-white rounded-2xl py-2 px-4 hover:bg-blue-500">Login</button>
                            <a class="text-sm text-gray-700" href="{{ route('password.request') }}">Forgot your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
