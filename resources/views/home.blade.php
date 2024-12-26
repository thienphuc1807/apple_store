<x-layout>
    <x-slider />
    <div class="max-w-[1200px] xl:mx-auto xl:px-0 px-5">
            <div class="lg:mt-20 mt-10">
                @foreach ($categories as $category)    
                    <x-section :name="$category->name" :slug="$category->slug" :products="$category->products"/>
                @endforeach
            </div>
            <div class="mt-20">
                <a href="/">
                    <img src={{Vite::asset("resources/images/banner_home.jpeg")}} alt="banner_home" class="object-contain mx-auto w-fit">
                </a>
            </div>
    
            <div class="mt-20 mb-8 text-center">
                <h2 class="text-apple_text text-2xl leading-[45px] pb-4">
                    <strong>Tin tức</strong>
                </h2>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">
                    <x-card-news />
                    <x-card-news />
                    <x-card-news />
                </div>
                <div class="mt-8">
                    <a href="/" class="inline-block leading-7 text-[#0066CC] hover:bg-[#0066CC] hover:text-white border-[1px] border-solid border-[#0066CC] rounded-lg py-[6px] px-11">
                        Xem tất cả tin tức >
                    </a>
                </div>
            </div>
    </div>
</x-layout>