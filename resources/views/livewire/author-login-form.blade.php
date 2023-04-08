<form wire:submit.prevent="LoginHandler()" method="post" class="m-auto max-w-md w-full bg-white px-6 py-4 flex flex-col gap-4 text-gray-600 shadow">
    @csrf
    @if (Session::get('fail'))
    <div class="border-l-4 border-red-600 px-4 py-2 shadow rounded-sm text-red-500">{{Session::get('fail')}}</div>
    @endif

    <h2 class="text-center uppercase font-semibold">Login to your account</h2>
    <div class="flex flex-col">
        <label for="email" class="w-full mb-1">Email address</label>
        <input type="email" wire:model="email" id="email" placeholder="Enter your email" autocomplete="off" class="w-full mb-4 px-2 py-1 focus:outline-none border-b-2">
        @error('email')
        <span class="pb-2 text-red-600 text-sm">{{$message}}</span>
        @enderror

        <div class="w-full flex justify-between mb-1">
            <label for="password">Password</label>
            <a href="{{ route('author.forgot-password') }}" class="hover:text-blue-500 hover:underline-offset-1 hover:underline">forgot password</a>
        </div>
        <input type="password" wire:model="password" id="password" placeholder="Enter your password" autocomplete="off" class="w-full px-2 py-1 focus:outline-none border-b-2">
        @error('password')
        <span class="py-2 text-red-600 text-sm">{{$message}}</span>
        @enderror

    </div>
    <button type="submit" class="text-center text-white font-semibold px-6 py-2 bg-blue-500 hover:bg-blue-600">Submit</button>
</form>