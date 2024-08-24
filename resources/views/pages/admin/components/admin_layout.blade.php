<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pop-csrf_token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/js/datatable/admin-dt.css')}}">
    <script src="{{asset('assets/js/datatable/datatable.js')}}"></script>
    <title>@yield('title', 'Popmovies')</title>
    <style>
        .scrollbar::-webkit-scrollbar {
            width: 3px;
            height: 3px;
        }

        .scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background: rgb(161, 98, 7);
        }

        .scrollbar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .scrollbar::-webkit-scrollbar-track {
            border-radius: 50px;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-800 text-slate-100 overflow-x-hidden overflow-y-scroll scrollbar tracking-wide min-w-96">
    @yield('body')

    <script src="{{asset('assets/js/admin.js')}}"></script>
</body>

</html>