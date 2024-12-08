@section('title', $productDetails->name)
@php
    $colors = json_decode($productDetails->colors)
@endphp
<x-layout>
    <x-breadcrumb 
    :category="isset($productDetails) ? $productDetails->name : ''" 
    :parentCategory="$parentCategory ?? null"
    :subcategory="$subcategory ?? null"
    />
    <div class="bg-white">
        <div class="mx-auto max-w-[1200px] space-y-6">
            <div class="flex gap-10 border-b-2">
                <div class="flex-1 aspect-square flex justify-center items-center bg-white rounded-2xl">
                    <div class="w-[70%]">
                        <img src={{Vite::asset('resources/images/iPhone16promax.png')}} class="w-full h-full object-contain" alt={{$productDetails->name}}>
                    </div>     
                </div>
                <form method="POST" action="/addcart" class="flex-1 space-y-3">
                    @csrf
                    <h1 class="text-2xl font-bold">{{$productDetails->name}}</h1>
                    <div class="flex items-baseline gap-5">
                        <span class="text-2xl font-bold text-actual_price">{{ number_format($productDetails->actual_price, 0, ',', '.') }}₫</span>
                        <span class="text-xl text-[#999] line-through">{{ number_format($productDetails->old_price, 0, ',', '.') }}₫</span>
                    </div>
                    <p class="text-old_price">(Đã bao gồm VAT)</p>
                    <div>
                        <p class="text-[#515154] pb-3">Dung lượng: </p>
                        <div class="flex gap-4">
                            @foreach (json_decode($productDetails->storage) as $storage)
                                <div data-storage="{{$storage}}" class="storage cursor-pointer border-2 rounded-md px-4 py-2 text-black">{{$storage}}</div>
                            @endforeach
                        </div>
                        @if ($errors)
                            <p class="text-red-500 mt-2">{{$errors->first("storage")}}</p>
                        @endif
                    </div>
                    <div>
                        <p class="text-[#515154] pb-3">Màu sắc: </p>
                        <div class=" flex gap-2">
                            @foreach($colors as $color)
                                <div class="colors rounded-full border-2 p-1 cursor-pointer">
                                    <div data-color="{{$color}}" class="rounded-full w-7 h-7 shadow-[inset_1px_1px_2px_rgba(0,0,0,10%)]" style="background-color: {{ $color }}"></div>
                                </div>  
                            @endforeach
                        </div>
                        @if ($errors)
                            <p class="text-red-500 mt-2">{{$errors->first("color")}}</p>
                        @endif
                    </div>
                    <input type="hidden" name="id" value="{{$productDetails->id}}">
                    <input type="hidden" name="name" value="{{$productDetails->name}}">
                    <input type="hidden" name="price" value="{{$productDetails->actual_price}}">
                    <input type="hidden" name="slug" value="{{$productDetails->slug}}">
                    <input type="hidden" name="color" id="color" value="">
                    <input type="hidden" name="storage" id="storage" value="">
                    <input type="hidden" name="quantity" value="1">
                    @if(session('success'))
                        <p class="text-green-500">{{session('success')}}</p>
                    @endif
                    <button type="submit" class="w-full hover:bg-actual_price bg-white hover:text-white text-actual_price border-2 border-actual_price text-base font-bold h-14 rounded-lg">THÊM VÀO GIỎ</button>
                </form>
            </div>
            <div>
                <p class="font-bold text-lg">Sản phẩm tương tự</p>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('.storage').click(function(){
                $('.storage').removeClass("border-actual_price");
                $(this).addClass("border-actual_price");
                $("#storage").val($(this).data("storage"));
            });

            $('.colors').click(function(){
                $('.colors').removeClass("border-actual_price");
                $(this).addClass("border-actual_price");
                $("#color").val($(this).children().data("color"));
            })
        })
    </script>
</x-layout>