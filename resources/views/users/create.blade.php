@extends('app')

@section('content')

    <h1 class="text-center my-5">Register form</h1>
    <div class="w-1/2 mx-auto">
        <form action="" method="POST">
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input class="border-2 rounded-md p-1" type="text" name="name" id="name">
            </div>
            <div class="flex flex-col mt-4">
                <label for="email">Email</label>
                <input class="border-2 rounded-md p-1" type="email" name="email" id="email">
            </div>
            <div class="flex flex-col mt-4">
                <label for="password">Password</label>
                <input class="border-2 rounded-md p-1" type="password" name="password" id="password">
            </div>
            <div class="flex flex-col mt-4">
                <label for="password-confirm">Confirm password</label>
                <input class="border-2 rounded-md p-1" type="password" name="password-confirm" id="password-confirm">
            </div>
            <button class="bg-gray-200 rounded-md w-24 mt-4 px-3 py-2" type="submit">Send</button>
        </form>
    </div>


@endsection
