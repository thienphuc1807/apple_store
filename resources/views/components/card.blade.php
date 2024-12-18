@props(['product'])

<div class="relative rounded-md shadow-card_shadow hover:shadow-card_hover_shadow bg-white py-6 px-4">
    <div class="absolute w-full flex items-baseline justify-end min-h-[50px] top-[7px] right-2">
        <img src={{Vite::asset("resources/images/0-phantram.png")}} class="max-w-24 max-h-12">
    </div>
    <div class="my-6">
        <a href="{{$product->slug}}"><img src={{Vite::asset("resources/images/iPhone16promax.png")}} class="mx-auto"></a>
    </div>
    <h3 class="text-left font-bold lg:text-lg text-base text-apple_text pb-4">
        <a href="{{$product->slug}}">{{$product->name}}</a>
    </h3>
    <div class="flex md:flex-row flex-col gap-2 md:items-baseline items-start jus overflow-hidden">
        <span class="text-actual_price font-bold lg:text-lg text-base">{{number_format($product['actual_price'], 0, ',', '.')}}đ</span>
        <span class="text-old_price text-xs line-through">{{number_format($product->old_price, 0, ',', '.')}}đ</span>
    </div>
</div>