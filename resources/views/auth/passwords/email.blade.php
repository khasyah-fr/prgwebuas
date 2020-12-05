<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-16 py-8 bg-blue-100 rounded-2xl">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="font-bold text-lg mb-4">{{ __('Reset Password') }}</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Email</label>
                        <input type="email" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <button type="submit"
                                class="mr-2 bg-blue-400 text-white w-full rounded-2xl py-2 px-4 hover:bg-blue-500">Send Password Reset Link
                        </button>
                    </div>

{{--                    <div class="form-group row mb-0">--}}
{{--                        <div class="col-md-6 offset-md-4">--}}
{{--                            <button type="submit" class="mr-2 bg-blue-400 text-white rounded-2xl py-2 px-4 hover:bg-blue-500">--}}
{{--                                {{ __('Send Password Reset Link') }}--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
</x-master>
