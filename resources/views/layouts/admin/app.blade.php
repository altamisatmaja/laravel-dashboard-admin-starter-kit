<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..700&display=swap" rel="stylesheet" />
</head>

<body class="font-inter antialiased bg-gray-50  text-gray-600 ">
    <div class="flex h-[100dvh] overflow-hidden">
        @include('layouts.admin.sidebar')
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden"
            x-ref="contentarea">
            @include('layouts.admin.header')
            <main class="grow">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('js')
</body>

</html>
