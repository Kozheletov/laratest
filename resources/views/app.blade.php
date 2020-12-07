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
        <ul class="flex flex-col items-center justify-between md:flex-row lg:w-1/2 mx-auto p-3">
            <li><a href="">Dashboard</a></li>
            <li><a href="">Log in</a></li>
            <li><a href="{{route('create')}}">Register</a></li>
            <li><a href="">Name</a></li>
            <li><a href="">Log out</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
</body>
</html>