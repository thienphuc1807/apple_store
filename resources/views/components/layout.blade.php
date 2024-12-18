<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Apple Store')</title>
    <link rel="icon" type="image/x-icon" href={{ Vite::asset("public/favicon.ico") }}>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Arial'] text-[14px] font-normal bg-[#f5f5f7]">
    <x-header />
      <section>
        {{$slot}}
      </section>
    <x-footer />
</body>
</html>