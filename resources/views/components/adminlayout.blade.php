<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Admin')</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('public/favicon.ico') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Arial'] text-[14px] font-normal bg-[#f5f5f7]">
    <div class="flex h-screen">
        <div id="sidebar" class="w-[250px] fixed h-full bg-apple_backgroundColor text-white transition-all duration-300">
            <div class="flex justify-center py-2">
                <img src="{{ Vite::asset('/resources/images/logo-shopdunk.png') }}" alt="logo" class="w-52 object-contain">
            </div>
            <div class="px-6">
                <ul>
                    <li class="py-5 cursor-pointer text-white"><a href="/admin">Dashboard</a></li>
                    <li class="py-5 cursor-pointer text-white"><a href="/admin/products">Products</a></li>
                    <li class="py-5 cursor-pointer text-white">Users</li>
                    <li class="py-5 cursor-pointer text-white">Orders</li>
                    <li class="py-5 cursor-pointer text-white">Settings</li>
                </ul>
            </div>
        </div>
        <div id="content" class="ml-[250px] w-full">
            <div class="flex items-center justify-between bg-white shadow-md">
                <div id="toggle-btn" class="bg-apple_backgroundColor p-6 inline-flex cursor-pointer">
                    <img src="{{ Vite::asset('resources/images/nav-menu-mobile.png') }}" alt="nav-menu-icon" class="w-5">
                </div>
                <div class="flex gap-5 px-5">
                    <a href="/"><img src="{{ Vite::asset('resources/images/bell.png') }}" alt="bell-icon" class="w-5 object-contain"></a>
                    <a href="/"><img src="{{ Vite::asset('resources/images/mail.png') }}" alt="mail-icon" class="w-5 object-contain"></a>
                </div>
            </div>
            <div class="p-5">
                {{$slot}}
            </div>
        </div>
    </div>
</body>
</html>