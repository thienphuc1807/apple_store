<x-layout>
    <div>
        <div class="flex overflow-hidden">
            {{-- <img src={{Vite::asset("resources/images/slide1.png")}} alt="slides">
            <img src={{Vite::asset("resources/images/slide2.png")}} alt="slides">
            <img src={{Vite::asset("resources/images/slide3.png")}} alt="slides">
            <img src={{Vite::asset("resources/images/slide4.png")}} alt="slides"> --}}
            <img src={{Vite::asset("resources/images/slide5.png")}} alt="slides">
        </div>
    </div>
    <div class="max-w-[1200px] xl:mx-auto lg:mx-5">
        <div class="mt-28">
            <x-products.section />
            <x-products.section />
            <x-products.section />
            <x-products.section />
        </div>
        <div class="mt-20">
            <a href="">
                <img src={{Vite::asset("resources/images/banner_home.jpeg")}} alt="banner_home" class="object-contain mx-auto w-fit">
            </a>
        </div>

        <div class="mt-20 mb-8 text-center">
            <h2 class="text-apple_text text-2xl leading-[45px] pb-4">
                <strong>Tin tức</strong>
            </h2>
            <div class="grid grid-cols-3 gap-5 ">
                <x-card-news />
                <x-card-news />
                <x-card-news />
            </div>
            <div class="mt-8">
                <a href="/" class="inline-block leading-7 text-[#0066CC] hover:bg-[#0066CC] hover:text-white border-[1px] border-solid border-[#0066CC] rounded-lg py-[6px] px-11">
                    Xem tất cả iPhone >
                </a>
            </div>
        </div>
    </div>
</x-layout>