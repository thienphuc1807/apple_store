@props(['category' => '', 'parentCategory' => null ,'subcategory' => null])
<div class="bg-white py-2 px-[10px]">
    <div class="max-w-[1200px] mx-auto">
        <ul class="text-apple_backgroundColor flex flex-wrap">
            <li>
                <a href="/" class="leading-[32px] text-sm hover:text-actual_price">Trang chủ</a>
            </li>
            @if (isset($parentCategory))
               <li> 
                    <span class="px-[10px] text-[14px]">></span>
                    <a href="{{$parentCategory->slug}}" class="leading-[32px] text-sm hover:text-actual_price">{{$parentCategory->name}}</a>
               </li>
            @endif
            @if (isset($subcategory))
               <li>
                    <span class="px-[10px] text-[14px]">></span>
                    <a href="{{$subcategory->slug}}" class="leading-[32px] text-sm hover:text-actual_price">{{$subcategory  ->name}}</a>
               </li>
            @endif
            <li>
                <span class="px-[10px] text-sm">></span>
                <a class="leading-[32px] text-[13px]">{{$category}}</a>
            </li>
           
        </ul>
    </div>
</div>