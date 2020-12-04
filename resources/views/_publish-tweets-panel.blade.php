<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea name="body" id="" class="w-full focus:outline-none" placeholder="What's going on?" style="resize:none;"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ current_user()->avatar }}" alt="user-avatar" class="rounded-full mr-4 border border-blue-400" style="width: 50px; height: 50px;">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow py-2 px-2 text-white">Announce something</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
