<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apple Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Arial'] text-[14px] font-normal bg-[#f5f5f7]">
    <header class="bg-apple_backgroundColor text-apple_color sticky top-0 z-50 w-full">
        <nav class="max-w-[1200px] xl:mx-auto lg:mx-5 justify-between flex items-center gap-6">
            {{-- Logo --}}
            <a href="/">
                <img src={{ Vite::asset("resources/images/logo.png")}} alt="Apple_logo" srcset="" class="w-6 h-6 object-contain">
            </a>
            {{-- nav_link --}}
            <div class="flex xl:gap-6 lg:gap-0">
                <x-nav-link href="/">iPhone</x-nav-link>
                <x-nav-link href="/">iPad</x-nav-link>
                <x-nav-link href="/">Mac</x-nav-link>
                <x-nav-link href="/">Watch</x-nav-link>
                <x-nav-link href="/">Phụ kiện</x-nav-link>
                <x-nav-link href="/">Máy cũ</x-nav-link>
                <x-nav-link href="/">Dịch vụ</x-nav-link>
                <x-nav-link href="/">Tin tức</x-nav-link>
                <x-nav-link href="/">Khuyến mại</x-nav-link>
            </div>
            {{-- icons --}}
            <div class="flex items-center gap-6">
                <a class="block" href=""><img src={{Vite::asset("resources/images/search-icon.png")}} alt="Search_icon" class="w-5 h-5 object-contain"></a>
                <a class="block" href=""><img src={{Vite::asset("resources/images/cart-icon.png")}} alt="Cart_icon" class="w-5 h-5 object-contain"></a>
                <a class="block" href=""><img src={{Vite::asset("resources/images/login.png")}} alt="Login_icon" class="w-5 h-5 object-contain"></a>
                <a class="block" href="">VI</a>
                <a class="block" href="">EN</a>
            </div>
        </nav>
    </header>
    <main>
      {{$slot}}
    </main>
    <footer class="bg-apple_text">
        <div class="max-w-[1200px] mx-auto">
            <div class="pt-16 pb-5 flex">
                <div class="w-[30%]">
                    <a href="/">
                        <img src={{ Vite::asset("resources/images/logo.png")}} alt="Apple_logo" srcset="" class="w-10 h-10 object-contain">
                    </a>
                    <p class="text-sm leading-[24px] text-apple_color py-[8px] text-justify">
                        Năm 2020, ShopDunk trở thành đại lý ủy quyền của Apple. Chúng tôi phát triển chuỗi cửa hàng tiêu chuẩn và Apple Mono Store nhằm mang đến trải nghiệm tốt nhất về sản phẩm và dịch vụ của Apple cho người dùng Việt Nam.
                    </p>
                    <div class="border border-solid border-[#ccc] bg-[#ecf0f1] rounded-[10px] px-[10px] pb-[10px]">
                        <p class="py-[18px] text-black underline text-[16px]"><strong><span>Tổng đài hỗ trợ</span></strong></p>
                        <p class="text-center"><strong>Mua hàng: <span class="text-[#06c] text-[18px]">1900.6626 (08:00 - 22:00)</span></strong></p>
                        <p class="text-center"><strong>Bảo hành: <span class="text-[#06c] text-[18px]">1900.6626 (08:00 - 22:00)</span></strong></p>
                    </div>
                </div>
                <div class="pl-[60px] w-[25%]">
                    <div class="text-apple_color mb-[15px]">
                        Thông tin
                    </div>
                    <ul class="text-old_price text-[13px] leading-[28px]">
                        <li>Tin tức</li>
                        <li>Giới thiệu</li>
                        <li>Check IMEI</li>
                        <li>Phương thức thanh toán</li>
                        <li>Thuê điểm bán lẻ</li>
                        <li>Bảo hành và sửa chữa</li>
                        <li>Tuyển dụng</li>
                        <li>Đánh giá chất lượng, khiếu nại</li>
                        <li>Tra cứu hoá đơn điện tử</li>
                    </ul>
                </div>
                <div class="pl-[60px] w-[25%]">
                    <div class="text-apple_color mb-[15px]">
                        Thông tin
                    </div>
                    <ul class="text-old_price text-[13px] leading-[28px]">
                        <li>Tin tức</li>
                        <li>Giới thiệu</li>
                        <li>Check IMEI</li>
                        <li>Phương thức thanh toán</li>
                        <li>Thuê điểm bán lẻ</li>
                        <li>Bảo hành và sửa chữa</li>
                        <li>Tuyển dụng</li>
                        <li>Đánh giá chất lượng, khiếu nại</li>
                        <li>Tra cứu hoá đơn điện tử</li>
                    </ul>
                </div>
                <div class="pl-[60px] w-[25%]">
                    <div class="text-apple_color mb-[15px]">
                        Thông tin
                    </div>
                    <ul class="text-old_price text-[13px] leading-[28px]">
                        <li>Tin tức</li>
                        <li>Giới thiệu</li>
                        <li>Check IMEI</li>
                        <li>Phương thức thanh toán</li>
                        <li>Thuê điểm bán lẻ</li>
                        <li>Bảo hành và sửa chữa</li>
                        <li>Tuyển dụng</li>
                        <li>Đánh giá chất lượng, khiếu nại</li>
                        <li>Tra cứu hoá đơn điện tử</li>
                    </ul>
                </div>
            </div>
            <div class="p-[20px_0px_32px_0px] text-old_price">
                © 2016 Công ty Cổ Phần HESMAN Việt Nam GPDKKD: 0107465657 do Sở KH & ĐT TP. Hà Nội cấp ngày 08/06/2016.
                Địa chỉ: Số 76 Thái Hà, phường Trung Liệt, quận Đống Đa, thành phố Hà Nội, Việt Nam
                Đại diện pháp luật: PHẠM MẠNH HÒA | ĐT: 0247.305.9999 | Email: lienhe@shopdunk.com
            </div>
        </div>
    </footer>
</body>
</html>