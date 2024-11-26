@section('title','Đăng ký')
<x-layout>
    <div class="bg-white">
        <div class="max-w-[1200px] mx-auto flex pt-10 lg:pb-40 pb-10 px-4 xl:gap-10 gap-0">
            <div class="w-[55%] max-h-[467px] lg:block hidden">
                <img src={{Vite::asset('resources/images/register_image.jpeg')}} alt="login_image" class="w-full h-full">
            </div>
            <x-forms.form method="POST" action="/user/register" >
                <h1 class="text-3xl py-4">Đăng ký</h1>
                <div class="pt-3 space-y-4">
                    <x-forms.input label="Tên, Họ" name="name"/>
                    <div class="flex gap-10 items-center">
                        <span>Giới tính:</span>
                        <div class="flex gap-5">
                            <x-forms.radio label="Nam" name="gender" id="male"/>
                            <x-forms.radio label="Nữ" name="gender" id="female"/>
                        </div>
                    </div>
                    <x-forms.input type="email" label="Email" name="email"/>
                    <x-forms.input label="Điện thoại" name="phoneNumber"/>
                    <x-forms.input label="Username" name="username"/>
                    <x-forms.input type="password" label="Mật khẩu" name="password"/>
                    <x-forms.input type="password" label="Xác nhận mật khẩu" name="password_confirmation"/>
                </div>
                <x-forms.button>Đăng ký</x-forms.button>
                <p>Bạn đã có tài khoản? <a href="" class="ml-2 text-actual_price">Đăng nhập ngay</a></p>
            </x-forms.form>
        </div>
    </div>
</x-layout>