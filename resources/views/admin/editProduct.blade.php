<x-adminlayout>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Chỉnh sửa sản phẩm</h1>
        <a href="/admin/products" class="bg-apple_backgroundColor text-white px-3 py-2 rounded">Quay về</a>
    </div>
    <form id="product-form" action="/admin/products/{{$product->id}}" method="POST" class="mt-5">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="name" class="text-lg font-semibold">Tên sản phẩm</label>
            <input type="text" name="name" id="name" value="{{$product->name}}" class="border border-gray-300 rounded-md p-1">
            @error('name')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="slug" class="text-lg font-semibold">Slug</label>
            <input type="text" name="slug" id="slug" value="{{$product->slug}}" class="border border-gray-300 rounded-md p-1">
            @error('slug')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col mt-3">
            <label for="old_price" class="text-lg font-semibold">Giá gốc</label>
            <input type="text" name="old_price" id="old_price" value="{{number_format($product->old_price)}}" class="border border-gray-300 rounded-md p-1">
            @error('old_price')
                <div class="text-red-500">{{$message}}</div>
            @enderror   
        </div>
        <div class="flex flex-col mt-3">
            <label for="actual_price" class="text-lg font-semibold">Giá khuyến mãi</label>
            <input type="text" name="actual_price" id="actual_price" value="{{number_format($product->actual_price)}}" class="border border-gray-300 rounded-md p-1">
            @error('actual_price')
                <div class="text-red-500">{{$message}}</div>
            @enderror   
        </div>
        <div class="flex flex-col mt-3">
            <label for="category" class="text-lg font-semibold">Danh mục</label>
            <select name="category" id="category" class="border border-gray-300 rounded-md p-1">
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == $product->categories_id ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
                <div class="text-red-500">{{$message}}</div>
            @enderror   
        </div>
        <div class="flex flex-col mt-3">
            <label for="sub_category" class="text-lg font-semibold">Danh mục con</label>
            <select name="sub_category" id="sub_category" class="border border-gray-300 rounded-md p-1">
                <!-- Subcategories will be populated by JavaScript -->
            </select>
            @error('sub_category')
                <div class="text-red-500">{{$message}}</div>
            @enderror  
        </div>
        <div class="flex mt-5">
            <button type="submit" class="bg-apple_backgroundColor text-white px-3 py-1 rounded">Lưu</button>
        </div>
    </form>
    <script>
        $(document).ready(function(){
            function fetchSubCategories(category_id, selected_sub_category_id = null) {
                $.ajax({
                    url: '/admin/categories/' + category_id + '/subcategories',
                    type: 'GET',
                    success: function(data){
                        $('#sub_category').empty();
                        $.each(data, function(index, subCategory){
                            $('#sub_category').append('<option value="'+subCategory.id+'">'+subCategory.name+'</option>');
                        });
                        // Set the selected subcategory if it exists
                        if (selected_sub_category_id) {
                            $('#sub_category').val(selected_sub_category_id);
                        }
                    }
                });
            }

            // Fetch subcategories for the initially selected category
            fetchSubCategories($('#category').val(), "{{$product->subcategories_id}}");

            // Fetch subcategories when the category changes
            $('#category').change(function(){
                var category_id = $(this).val();
                fetchSubCategories(category_id);
            });

            // Format number input as user types
            function formatNumberInput(input) {
                input.value = input.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            }

            $('#old_price, #actual_price').on('input', function() {
                formatNumberInput(this);
            });

            // Remove commas before form submission
            $('#product-form').submit(function() {
                $('#old_price, #actual_price').each(function() {
                    $(this).val($(this).val().replace(/,/g, ''));
                });
            });
        });
    </script>
</x-adminlayout>