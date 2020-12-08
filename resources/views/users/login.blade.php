@extends('app')

@section('content')

    <h1 class="text-center my-5">Go in app!</h1>
    <div class="w-1/2 mx-auto">
        <form action="{{route('users.auth')}}" method="POST">
            @csrf

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

            <button class="bg-gray-200 rounded-md w-24 mt-4 px-3 py-2" type="submit">Send</button>
        </form>
    </div>

@endsection
