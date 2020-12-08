@extends('app')

@section('content')

    <h1 class="text-center my-5">Register form</h1>
    <div class="w-1/2 mx-auto">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input class="border-2 rounded-md p-1 @error('name') border-red-700 @enderror" type="text" name="name" id="name"
                       value="{{old('name')}}">
                @error('name') <span class="mt-1 text-xs text-red-700">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col mt-4">
                <label for="email">Email</label>
                <input class="border-2 rounded-md p-1 @error('email') border-red-700 @enderror" type="email" name="email" id="email"
                       value="{{old('email')}}">
                @error('email') <span class="mt-1 text-xs text-red-700">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col mt-4">
                <label for="password">Password</label>
                <input class="border-2 rounded-md p-1 @error('password') border-red-700 @enderror" type="password" name="password"
                       id="password">
                @error('password') <span class="mt-1 text-xs text-red-700">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col mt-4">
                <label for="password_confirmation">Confirm password</label>
                <input class="border-2 rounded-md p-1 @error('password') border-red-700 @enderror" type="password"
                       name="password_confirmation" id="password_confirmation">
                @error('password') <span class="mt-1 text-xs text-red-700">{{$message}}</span> @enderror
            </div>
            <button class="bg-gray-200 rounded-md w-24 mt-4 px-3 py-2" type="submit">Send</button>
        </form>
    </div>


@endsection
