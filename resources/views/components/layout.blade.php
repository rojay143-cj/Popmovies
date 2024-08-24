<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pop-csrf_token" content="{{csrf_token()}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title','Popmovies')</title>
    @vite('resources/css/app.css')
</head>
<body class="dark:bg-gray-950 text-gray-300 overflow-x-hidden overflow-y-scroll scrollbar tracking-wide min-w-96">
    @yield('body')

    <script src="{{asset('assets/js/user.js')}}"></script>
</body>
</html>