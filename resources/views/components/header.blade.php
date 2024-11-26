<header class="bg-apple_backgroundColor text-apple_color sticky top-0 z-50 w-full">
    <nav class="flex max-w-[1200px] xl:mx-auto lg:mx-5 items-center">
            <div class="lg:hidden md:block lg:order-none order-1 md:py-4 py-2 md:px-6 px-3">
                <img src={{Vite::asset("resources/images/nav-menu-mobile.png")}} alt="nav-menu" class="w-6 h-6 object-contain"/>
            </div>
            {{-- Logo --}}
            <div class="lg:order-1 order-3 lg:flex-none flex-1 text-center">
                <a href="/" class="inline-block">
                    <img src={{ Vite::asset("resources/images/logo.png")}} alt="Apple_logo" class="h-12 lg:pt-0 pt-1 object-contain">
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
                <a href="">
                    <img src={{Vite::asset("resources/images/search-icon.png")}} alt="Search_icon" class="w-5 h-5 object-contain">
                </a>
                <a href="">
                    <img src={{Vite::asset("resources/images/cart-icon.png")}} alt="Cart_icon" class="w-6 h-6 object-contain">
                </a>
                <div class="relative lg:block hidden group cursor-pointer">
                    <div>
                        <img src={{Vite::asset("resources/images/login.png")}} alt="Login_icon" class="w-5 h-5 object-contain">
                    </div>
                    <div class="absolute before:block before:min-w-[50px] left-[-20px] before:h-10">
                        <div class="absolute top-3 shadow-2xl bg-white left-[-150px] text-black rounded-md min-w-[250px] p-2 hidden group-hover:block px-8">
                            @guest
                                <a href="/user/register" class="hover:text-actual_price block border-b-2 py-3">
                                    Tạo tài khoản ngay
                                </a>
                                <a href="/user/login" class="hover:text-actual_price block border-b-2 py-3">
                                    Đăng nhập
                                </a>
                            @endguest

                            @auth
                                <form action="/user/logout" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-full text-left hover:text-actual_price py-3 border-b-2">
                                        Đăng xuất
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-4 ml-0 flex lg:order-4 order-2 gap-2">
                <a href=""><img src={{Vite::asset('resources/images/vn.png')}} alt="VN" class="object-contain w-4"></a>
                <a href=""><img src={{Vite::asset('resources/images/us.png')}} alt="US" class="object-contain w-4"></a>
            </div>
    </nav>
</header>