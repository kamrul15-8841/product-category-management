<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Product Category Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<div class="flex">
    <!-- Sidebar -->

@include('layouts.partials.sidebar')

<!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        @include('layouts.partials.header')

        <main class="flex-1 p-5">
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>
</div>
</body>
</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Laravel Master Layout</title>--}}
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--</head>--}}
{{--<body class="bg-gray-100">--}}
{{--<div class="flex">--}}
{{--    <!-- Sidebar -->--}}
{{--    <x-layout-sidebar />--}}

{{--    <!-- Main Content -->--}}
{{--    <div class="flex-1 flex flex-col min-h-screen">--}}
{{--        <x-layout-header />--}}

{{--        <main class="flex-1 p-5">--}}
{{--            @yield('content')--}}
{{--        </main>--}}

{{--        <x-layout-footer />--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Laravel Master Layout</title>--}}
{{--    @vite('resources/css/app.css')--}}
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--</head>--}}
{{--<body class="bg-gray-100">--}}
{{--<div class="flex">--}}
{{--    <!-- Sidebar -->--}}
{{--    <aside class="w-1/5 bg-gray-800 text-white min-h-screen p-5">--}}
{{--        <h1 class="text-lg font-bold mb-5">Dashboard</h1>--}}
{{--        <ul>--}}
{{--            <li><a href="{{ route('home') }}" class="block py-2 hover:bg-gray-700">Home</a></li>--}}
{{--            <li><a href="{{ route('categories.index') }}" class="block py-2 hover:bg-gray-700">Categories</a></li>--}}
{{--            <li><a href="{{ route('products.index') }}" class="block py-2 hover:bg-gray-700">Products</a></li>--}}
{{--        </ul>--}}
{{--    </aside>--}}

{{--    <!-- Main Content -->--}}
{{--    <main class="flex-1 p-5">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}



