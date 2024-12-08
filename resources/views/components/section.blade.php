@props(['name'=>'','products'=>'','slug'=>''])

<div class="mt-10 text-center">
    <h1 class="pb-6 font-bold text-[30px]">{{$name}}</h1>

    <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-5">    
        @foreach ($products->take(4) as $product)
            <x-card :product="$product"/>
        @endforeach
    </div>

    <div class="mt-8">
        <a href="/{{$slug}}" class="inline-block leading-7 text-[#0066CC] hover:bg-[#0066CC] hover:text-white border-[1px] border-solid border-[#0066CC] rounded-lg py-[6px] px-11">
            Xem tất cả {{$name}} >
        </a>
    </div>
</div>