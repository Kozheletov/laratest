<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container mx-auto">
    <nav class="bg-blue-300">
        <ul class="flex flex-col md:items-center md:flex-row justify-end lg:w-1/2 mx-auto p-3">
            <li class="ml-5"><a href="{{route('dashboard')}}">Dashboard</a></li>
            @guest
                <li class="ml-5"><a href="{{route('users.login')}}">Login</a></li>
                <li class="ml-5"><a href="{{route('users.create')}}">Register</a></li>
            @endguest

            @auth
                <li class="ml-5"><a href="">{{auth()->user()->name}}</a></li>
                <li class="ml-5">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>
    @yield('content')
</div>
</body>
</html>
