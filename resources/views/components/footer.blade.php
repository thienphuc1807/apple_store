<footer class="bg-apple_text">
    <div class="lg:max-w-[1200px] mx-auto xl:px-0 md:px-20 px-6">
        <div class="lg:pt-16 pt-10 pb-5 flex lg:flex-row flex-col">
            <div class="lg:w-[30%] w-full">
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
            <div class="lg:pl-[60px] pl-0 lg:w-[25%] w-full">
                <div id="information-title" class="lg:hidden flex justify-between text-apple_color py-4 lg:mb-[15px] border-opacity-50 lg:border-b-0 border-b-[1px] border-old_price">
                    <span class="lg:ml-0 ml-4 text-base">Thông tin</span>
                    <img src={{Vite::asset("resources/images/icon-footer.png")}} alt="arrow_down" class="w-4 object-contain">
                </div>
                <div class="lg:block hidden justify-between text-apple_color py-4 lg:mb-[15px] border-opacity-50 lg:border-b-0 border-b-[1px] border-old_price">
                    <span class="lg:ml-0 ml-4 text-base">Thông tin</span>
                </div>
                <ul id="information-block" class="text-old_price text-[13px] leading-[28px] lg:block hidden">
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Tin tức</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Giới thiệu</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Check IMEI</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Phương thức thanh toán</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Thuê điểm bán lẻ</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Bảo hành và sửa chữa</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Tuyển dụng</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Đánh giá chất lượng, khiếu nại</li>
                    <li class="lg:ml-0 ml-8 lg:py-0 py-2">Tra cứu hoá đơn điện tử</li>
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

<script>
    $(function(){
        $("#information-title").click(function(){
            $("#information-block").slideToggle(1000);
        })
    })
</script>