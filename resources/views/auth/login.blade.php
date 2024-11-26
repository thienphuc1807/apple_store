@section('title','Đăng nhập')
<x-layout>
    <div class="bg-white">
        <div class="max-w-[1200px] mx-auto flex pt-10 lg:pb-40 pb-10 px-4 xl:gap-20 lg:gap-10 gap-0">
            <div class="w-[50%] lg:block hidden">
                <img src={{Vite::asset('resources/images/login_image.jpeg')}} alt="login_image" class="w-full">
            </div>
            <x-forms.form method="POST" action="/user/login" class="flex-1">
                <h1 class="text-3xl py-4">Đăng nhập</h1>
                <div class="pt-3 space-y-4">
                    <x-forms.input label="Tên đăng nhập:" name="username" />
                    <x-forms.input type="password" label="Mật khẩu:" name="password" />
                </div>
                <div class="flex justify-between py-5">
                    <div class="flex gap-2">
                        <input type="checkbox" class="w-[18px] h-[18px]" name="remember_password" id="remember_password">
                        <label for="remember_password" class="text-old_price">Nhớ mật khẩu</label>
                    </div>
                    <a href="">Quên mật khẩu?</a>
                </div>
            
                <x-forms.button>Đăng nhập</x-forms.button>
                <p>Bạn chưa có tài khoản? <a href="" class="ml-2 text-actual_price">Tạo tài khoản ngay</a></p>
            </x-forms.form>
        </div>
    </div>
</x-layout>