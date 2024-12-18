@if (isset($category))
    @section('title',$category->name)
@elseif (isset($subcategory))
    @section('title',$subcategory->name)
@endif
<x-layout>
    @if(isset($category) || isset($subcategory))
        <x-breadcrumb 
            :category="isset($category) ? $category->name : $subcategory->name" 
            :parentCategory="$parentCategory ?? null"
        />
        <div class="max-w-[1200px] mx-auto xl:px-0 md:px-6 px-4">
            <h1 class="text-center md:text-[36px] text-3xl md:font-bold leading-[54px] pt-4 pb-2">{{isset($category) ? $category['name'] : $subcategory['name']}}</h1>
            @if (isset($category))
            <div class="mb-[30px]"><x-slider></x-slider></div>
            <div class="flex justify-between mb-5">
                <div class="flex overflow-auto  
                         [&::-webkit-scrollbar]:h-2
                         [&::-webkit-scrollbar]:w-2
                         [&::-webkit-scrollbar-track]:rounded-full
                         [&::-webkit-scrollbar-track]:bg-neutral-200
                         [&::-webkit-scrollbar-thumb]:rounded-full
                         [&::-webkit-scrollbar-thumb]:bg-gray-300
                         dark:[&::-webkit-scrollbar-track]:bg-neutral-200
                         dark:[&::-webkit-scrollbar-thumb]:bg-gray-300 w-[80%]">    
                     @foreach ($subcategories as $subcategory)
                         <x-category-box :subcategory="$subcategory"/>
                     @endforeach
                </div>
                <div>
                     <a class="text-[#777] border border-solid border-[#EBEBEB] h-[48px] bg-white py-[12px] px-[15px] min-h-[48px] cursor-pointer text-[15px] flex items-center rounded-lg">
                         <img src={{Vite::asset("resources/images/comparison.png")}} alt="comparison" class="h-auto w-[26px] mr-[12px]">
                         So sánh iPhone
                     </a>
                </div>
             </div>
            @endif
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 lg:gap-5 gap-3">
            @foreach ($products as $product)   
                <x-card :product="$product"/>
            @endforeach
        </div>
    @else
    <div class="max-w-[1200px] min-h-[600px] mx-auto flex flex-col justify-center items-center">
        <img src={{Vite::asset("resources/images/item_not_found.png")}} alt="Item not found image">
        <h1>No item found!</h1>
    </div>
    @endif
</x-layout>