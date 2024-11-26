@if ($category)
    @section('title',$category->name)
@elseif($subcategory)
    @section('title',$subcategory->name)
@else
    
@endif
<x-layout>
    @if($category || $subcategory)
    <x-breadcrumb 
    :category="$category ? $category->name : $subcategory->name" 
    :categoryName="$categoryName"    
    />
      <div class="max-w-[1200px] mx-auto">
            <h1 class="text-center text-[36px] font-bold leading-[54px] pt-4 pb-2">{{$category ? $category['name'] : $subcategory['name']}}</h1>
            @if ($category)
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
                    <x-category-box :subcategory="$category->name" :active="true"/>
                     @foreach ($subcategories as $subcategory)
                         <x-category-box :subcategory="$subcategory->name"/>
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
            <div class="grid lg:grid-cols-4 grid-cols-3 gap-5">
                @foreach ($products as $product)   
                    <x-card :product="$product"/>
                @endforeach
            </div>

            @else
                <h1>No item found!</h1>
            @endif
      </div>
</x-layout>