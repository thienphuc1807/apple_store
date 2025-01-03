<header class="sticky top-0 z-50 w-full">   
    <nav class="bg-apple_backgroundColor text-apple_color">
        <div class="flex max-w-[1200px] xl:mx-auto lg:mx-5 items-center">
            <div id="menu-btn" class="lg:hidden md:block lg:order-none order-1 md:py-4 py-2 md:px-6 px-3">
                <img id="show-btn" src={{Vite::asset("resources/images/nav-menu-mobile.png")}} alt="nav-menu" class="w-6 h-6 object-contain"/>
                <img id="hidden-btn" src={{Vite::asset("resources/images/icon_Close.png")}} alt="nav-menu" class="hidden w-6 h-6 object-contain"/>
            </div>
            {{-- Logo --}}
            <div class="lg:order-1 order-2 lg:flex-none flex-1 text-center">
                <a href="/" class="lg:block inline-block">
                    <img src={{ Vite::asset("resources/images/logo-shopdunk.png")}} alt="Apple_logo" class="h-12 lg:pt-0 pt-1 object-contain">
                </a>
            </div>
            {{-- nav_link --}}
            <div class="lg:flex flex-1 xl:gap-4 gap-0 lg:order-2 order-none hidden justify-center items-center">
                @foreach ($categories as $category)
                    <x-nav-link href="/{{$category->slug}}" :active="request()->is($category->slug)">{{$category->name}}</x-nav-link>
                @endforeach
            </div>
            {{-- icons --}}
            <div class="order-3 flex items-center lg:gap-4 gap-6 md:pr-6 pr-3">
                <a href="">
                    <img src={{Vite::asset("resources/images/search-icon.png")}} alt="Search_icon" class="w-5 h-5 object-contain">
                </a>
                <a href="/user/cart">
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
                                <form action="/logout" method="post">
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
        </div>
    </nav>
    <div class="relative">
        <x-category-mobile />
        <div id="menu" class="absolute w-full bg-white md:mx-2 shadow-2xl hidden">
            <ul class="px-4 text-base">
                <li class="py-4 first:border-t-0 border-t-2">Tạo tài khoản ngay</li>
                <li class="py-4 first:border-t-0 border-t-2">Đăng nhập</li>
                <li class="py-4 first:border-t-0 border-t-2">Tin tức</li>
            </ul>
        </div>
    </div>

</header>

<script>
    $(function(){
        $("#show-btn").click(function(){
            $(this).addClass("hidden")
            $("#hidden-btn").removeClass("hidden")
            $("#menu").slideDown();
        })
        $("#hidden-btn").click(function(){
            $(this).addClass("hidden")
            $("#show-btn").removeClass("hidden")
            $("#menu").slideUp();
        })
    })
</script>