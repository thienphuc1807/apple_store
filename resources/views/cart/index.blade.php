@section('title' , 'Giỏ hàng')
<x-layout>
    <style>
        input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        }
    </style>
    <div class="md:max-w-[600px] w-full mx-auto min-h-screen">
        @if (!empty($cart) && count($cart) > 0)
        
        <div class="flex py-2 md:px-0 px-4 justify-between">
            <a href="/">< Về trang chủ</a>
            <h1 class="md:block hidden">Giỏ hàng của bạn</h1>
        </div>

        <div class="bg-white shadow-2xl rounded-2xl mb-4">
                <div class="md:px-8 px-2 md:pt-8 pt-4 md:pb-6 pb-2">
                    @foreach ($cart as $key => $item)
                        <x-cart-item :item="$item" :key="$key"/>
                    @endforeach
                    <div class="flex justify-between items-center py-4">
                        <p><b>Tạm tính</b> ({{count($cart)}} sản phẩm):</p>
                        <b class="text-base">{{number_format($total, 0, ',', '.')}}đ</b>
                    </div>
                </div>
                <div class="border-t-4 border-gray-200">
                    <div class="md:px-8 px-4 py-4 space-y-3">
                        <p class="font-bold text-base">Thông tin khách hàng</p>
                        <div class="flex gap-6">
                            <x-forms.radio name="gender" id="male" label="Anh" />
                            <x-forms.radio name="gender" id="female" label="Chị" />
                        </div>
                        <div class="flex gap-3">
                            <x-forms.input label="Họ và tên" name="fullName"/>
                            <x-forms.input label="Số điện thoại" name="phoneNumber"/>
                        </div>
                    </div>  
                </div>
                <div class="border-t-4 border-gray-200">
                    <div class="md:px-8 px-4 py-4 space-y-3">
                        <p class="font-bold text-base">Địa chỉ</p>
                        <x-forms.city-select />
                        <x-forms.input label="Số nhà, tên đường" name="address" />
                    </div>  
                </div>
                <div class="border-t-4 border-gray-200">
                    <div class="md:px-8 px-4 py-4 space-y-3">
                        <div class="flex justify-between text-base">
                            <b>Tổng tiền:</b>
                            <b class="text-red-500">{{number_format($total, 0, ',', '.')}}đ</b>
                        </div>
                        <x-forms.button>Đặt hàng</x-forms.button>
                    </div>
                </div>
        
        </div>
        @else
        <div class="flex flex-col items-center lg:py-40 py-20">       
            <img src={{Vite::asset("resources/images/cart.png")}} alt="cart" class="lg:w-52 w-32 lg:h-52 h-32 object-contain">     
            <p>Giỏ hàng của bạn chưa có sản phẩm nào.</p>
        </div>
        @endif
    </div>
</x-layout>