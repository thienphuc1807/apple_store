<x-adminlayout>
    <h1 class="text-2xl font-bold">Thêm sản phẩm mới</h1>
    <form action="/admin/products/create" method="POST" id="product-form">
        @csrf
        <div class="flex flex-col mt-3">
            <label for="name" class="text-lg font-semibold">Tên sản phẩm</label>
            <input type="text" name="name" value="{{old("name")}}" id="name" class="border border-gray-300 rounded-md p-1">
            @error('name')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col mt-3">
            <label for="old_price" class="text-lg font-semibold">Giá gốc</label>
            <input type="text" name="old_price" value="{{old("old_price")}}" id="old_price" class="border border-gray-300 rounded-md p-1">
            @error('old_price')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col mt-3">
            <label for="actual_price" class="text-lg font-semibold">Giá khuyến mãi</label>
            <input type="text" name="actual_price" value="{{old("actual_price")}}" id="actual_price" class="border border-gray-300 rounded-md p-1">
            @error('actual_price')
                <div class="text-red-500">{{$message}}</div>
            @enderror   
        </div>
        <div class="flex flex-col mt-3">
            <label for="stock" class="text-lg font-semibold">Số lượng</label>
            <input type="number" name="stock" value="{{old("stock")}}" id="stock" class="border border-gray-300 rounded-md p-1">
            @error('stock')
                <div class="text-red-500">{{$message}}</div>
            @enderror   
        </div>
        <div class="flex flex-col mt-3">
            <label for="category" class="text-lg font-semibold">Danh mục</label>
            <select name="category" id="category" class="border border-gray-300 rounded-md p-1">
                <option value="" selected>Chọn danh mục</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
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
        <input type="hidden" name="slug" id="slug">
        <div class="flex mt-5">
            <button type="submit" class="bg-apple_backgroundColor text-white px-3 py-1 rounded">Thêm sản phẩm</button>
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

            $('#name').on('input', function() {
                var slug = $(this).val().toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '') // Remove invalid characters
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/-+/g, '-'); // Replace multiple hyphens with a single hyphen
                $('#slug').val(slug);
            });
        });
    </script>
</x-adminlayout>