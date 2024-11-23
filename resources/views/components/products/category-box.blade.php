@props(['subcategory','active'=>false])

<div class="ml-[5px] mr-[40px] mb-[20px]">
    <a href="/{{ $subcategory }}" class="{{$active ? "text-actual_price border-b-2 pb-2 font-bold border-actual_price" : "text-apple_backgroundColor"}} selection:text-[15px] whitespace-nowrap">{{!$active ? $subcategory : "Tất cả"}}</a>
</div>