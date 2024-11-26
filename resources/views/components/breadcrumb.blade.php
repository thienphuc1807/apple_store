@props(['category' => '', 'categoryName' => ''])
<div class="bg-white py-2 px-[10px]">
    <div class="max-w-[1200px] mx-auto">
        <ul class="text-apple_backgroundColor flex">
            <li>
                <a href="/" class="leading-[32px] text-[13px] hover:text-actual_price">Trang chủ</a>
            </li>
            @if ($categoryName)
               <li>
                    <span class="px-[10px] text-[14px]">></span>
                    <a href="/{{ $categoryName['name'] }}" class="leading-[32px] text-[13px] hover:text-actual_price">{{$categoryName['name']}}</a>
               </li>
            @endif
            <li>
                <span class="px-[10px] text-[14px]">></span>
                <a class="leading-[32px] text-[13px]">{{$category}}</a>
            </li>
           
        </ul>
    </div>
</div>