<x-adminlayout>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Quản lí sản phẩm</h1>
        <a href="/admin/products/create" class="bg-apple_backgroundColor text-white px-3 py-2 rounded">Thêm sản phẩm mới</a>
    </div>
    <table class="w-full mt-5 bg-white shadow-md rounded-md overflow-hidden">
        <thead>
            <tr class="bg-apple_backgroundColor text-white">
                <th class="border border-gray-300">ID</th>
                <th class="border border-gray-300">Tên sản phẩm</th>
                <th class="border border-gray-300">Giá gốc</th>
                <th class="border border-gray-300">Giá khuyến mãi</th>
                <th class="border border-gray-300">Số lượng</th>
                <th class="border border-gray-300">Danh mục</th>
                <th class="border border-gray-300">Danh mục con</th>
                <th class="border border-gray-300"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border border-gray-300 text-center">{{$product->id}}</td>
                <td class="border border-gray-300 pl-2">{{$product->name}}</td>
                <td class="border border-gray-300 pl-2">{{number_format($product->old_price).' đ'}}</td>
                <td class="border border-gray-300 pl-2">{{number_format($product->actual_price).' đ'}}</td>
                <td class="border border-gray-300 pl-2">{{$product->stock}}</td>
                <td class="border border-gray-300 pl-2">{{$product->categories->name}}</td>
                <td class="border border-gray-300 pl-2">{{optional($product->subCategories)->name}}</td>
                <td class="border border-gray-300 pl-2">
                    <a href="/admin/products/{{$product->id}}/edit" class="bg-apple_backgroundColor text-white px-3 py-1 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="/admin/products/{{$product->id}}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if(session('success'))
        <p class="text-green-500">{{session('success')}}</p>
    @elseif(session('error'))
        <p class="text-red-500">{{session('error')}}</p>
    @endif
</x-adminlayout>