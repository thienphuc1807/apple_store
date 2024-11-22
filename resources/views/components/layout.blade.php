<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apple Store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Arial'] text-[14px] font-normal bg-[#f5f5f7]">
    <x-header />
    <div class="lg:hidden block"><x-products.category-mobile /></div>
    <main>
      <div>{{$slot}}</div>
    </main>
    <x-footer />
</body>
</html>