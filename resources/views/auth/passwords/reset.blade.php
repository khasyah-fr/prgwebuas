<x-master>
    <div class="container mx-auto flex justify-center">
        <div class=" px-16 py-8 bg-blue-100 rounded-2xl">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Reset Password') }}</div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-6">
                            <label for="email" class="mb-2 uppercase block font-bold text-gray-700 text-xs">Email</label>
                            <input type="email" class="border border-gray-400 p-2 w-full rounded-2xl focus:outline-none" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

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
                                    class="mr-2 bg-blue-400 text-white rounded-2xl py-2 px-4 hover:bg-blue-500">Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-master>
