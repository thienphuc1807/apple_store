@props(['subcategory'])

<div class="ml-[5px] mr-[40px] mb-[20px]">
    <a href="/{{ $subcategory->name }}" class="text-[15px] whitespace-nowrap text-apple_backgroundColor">{{$subcategory->name}}</a>
</div>