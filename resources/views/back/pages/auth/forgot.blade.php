@extends('back.layouts.auth-layout')
@section('pageTitle', 'Forgot Password')
@section('content')
<div class="min-h-screen flex p-2 bg-[#F4EEE0]">
    <form action="" class="m-auto max-w-md w-full bg-white px-6 py-4 flex flex-col gap-4 text-gray-600 shadow">
        @csrf
        <h2 class="text-center uppercase font-semibold">Forgot password</h2>
        <div class="flex flex-col">
            <label for="email" class="w-full mb-1">Email address</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full mb-4 px-2 py-1 focus:outline-none border-b-2">
            
        </div>
        <button type="submit" class="text-center text-white font-semibold px-6 py-2 bg-blue-500 hover:bg-blue-600">Send me a new password</button>
        <div>
            Forget it,
            <a href="{{ route('author.login') }}" class="hover:text-blue-500 underline-offset-2 underline">send me back </a>
            to sign in page
        </div>
    </form>
</div>
@endsection