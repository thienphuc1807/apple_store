<header class="bg-apple_backgroundColor text-apple_color sticky top-0 z-50 w-full">
    <nav class="flex max-w-[1200px] xl:mx-auto lg:mx-5 items-center">
            <div class="lg:hidden md:block lg:order-none order-1 py-4 px-6">
                <img src={{Vite::asset("resources/images/nav-menu-mobile.png")}} alt="nav-menu" class="w-6 h-6 object-contain"/>
            </div>
            {{-- Logo --}}
            <div class="lg:order-1 order-3 lg:flex-none flex-1 text-center">
                <a href="/" class="inline-block">
                    <img src={{ Vite::asset("resources/images/logo.png")}} alt="Apple_logo" class="w-full md:h-12 h-11 lg:pt-0 pt-1 object-contain">
                </a>
            </div>
            {{-- nav_link --}}
            <div class="lg:flex flex-1 xl:gap-4 gap-0 lg:order-2 order-none hidden justify-center items-center">
                <x-nav-link href="/iPhone">iPhone</x-nav-link>
                <x-nav-link href="/iPad">iPad</x-nav-link>
                <x-nav-link href="/Mac">Mac</x-nav-link>
                <x-nav-link href="/Watch">Watch</x-nav-link>
                <x-nav-link href="/news">Tin tức</x-nav-link>
            </div>
            {{-- icons --}}
            <div class="lg:order-3 order-4 flex items-center lg:gap-4 md:gap-10 gap-4 lg:px-0 md:px-6 px-2">
                <div>
                    <a href="">
                        <img src={{Vite::asset("resources/images/search-icon.png")}} alt="Search_icon" class="w-5 h-5 object-contain">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src={{Vite::asset("resources/images/cart-icon.png")}} alt="Cart_icon" class="w-6 h-6 object-contain">
                    </a>
                </div>
                <div class="lg:block hidden">
                    <a href="">
                        <img src={{Vite::asset("resources/images/login.png")}} alt="Login_icon" class="w-5 h-5 object-contain">
                    </a>
                </div>
            </div>
            <div class="md:ml-4 ml-0 flex lg:order-4 order-2 gap-2">
                <a href=""><img src={{Vite::asset('resources/images/vn.png')}} alt="VN" class="object-contain w-4"></a>
                <a href=""><img src={{Vite::asset('resources/images/us.png')}} alt="US" class="object-contain w-4"></a>
            </div>
    </nav>
</header>