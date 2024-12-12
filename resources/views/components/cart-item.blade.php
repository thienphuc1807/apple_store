@props(['item','key'])
<div class="flex md:gap-4 gap-2 py-3 first:border-t-0 border-t-2 border-gray-200">
    <div class="flex flex-col gap-2 justify-center items-center">
        <img src={{Vite::asset('resources/images/iPhone16promax.png')}} alt={{$item['name']}} class="w-24 h-24" />
        <button data-key="{{$key}}" class="delete_btn text-xs text-old_price bg-gray-100 px-2 py-1">Xoá</button>
    </div>
    <div class="flex flex-1 flex-col gap-2">
        <div class="subtotal flex justify-between gap-2">
            <div class="md:text-base text-sm">
                <a href="/{{$item['slug']}}" class="hover:text-actual_price">{{$item['name']}} {{$item['storage']}}</a>
            </div>
            <div class="subtotal_text font-bold md:text-base text-sm">
                {{number_format($item['price'] * $item['quantity'], 0, ',', '.')}}đ
            </div>
        </div>
        <div class="flex items-center gap-1">
            <span class="text-old_price text-xs">Màu sắc: </span>
            <div class="w-7 h-7 border-2 rounded-full" style="background-color: {{$item['color']}}"></div>
        </div>
        <div data-id="{{$key}}" class="control flex gap-[2px]">
            <button class="minus border-2 w-6 h-6 text-[18px] leading-3 rounded-md">-</button>
            <input type="number" min="1" class="quantity w-6 h-6 text-center bg-gray-100" value={{$item['quantity']}} readonly>
            <button class="plus border-2 w-6 h-6 text-[18px] leading-3 rounded-md">+</button>
        </div>
    </div>
</div>
<script>
$(function () {

    $(document).on('click' , '.delete_btn' ,function(){
        const key = $(this).data("key");
        deleteItemFromCart(key);
    })

    function deleteItemFromCart(key){
        $.ajax({
            url:`/removecart/${key}`,
            method: 'POST',
            data: {
                _method: 'DELETE',
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            success: function (response) {
                location.reload();
            },  
            error: function (xhr) {
                alert(xhr.responseText || 'Failed. Please try again.');
            }
        })
    }


    $(document).on('click', '.plus', function () {
        const item = $(this).closest('.control');
        const subtotal = item.siblings('.subtotal');
        const subtotal_text = subtotal.children('.subtotal_text');
        const id = item.data('id');
        const quantityInput = item.find('.quantity');
        let quantity = parseInt(quantityInput.val()) + 1;
        updateCart(id, quantity, quantityInput,  subtotal_text);
    });

    $(document).on('click', '.minus', function () {
        const item = $(this).closest('.control');
        const subtotal = item.siblings('.subtotal');
        const subtotal_text = subtotal.children('.subtotal_text');
        const id = item.data('id');
        const quantityInput = item.find('.quantity');
        let quantity = Math.max(parseInt(quantityInput.val()) - 1, 1);
        updateCart(id, quantity, quantityInput, subtotal_text);
    });

    function updateCart(id, quantity, quantityInput, subtotal_text) {
        $.ajax({
            url: `/updatequantity/${id}`,
            method: 'POST', // Use POST
            data: {
                _method: 'PATCH', // Simulates a PATCH request
                _token: $('meta[name="csrf-token"]').attr('content'),
                quantity: quantity
            },
            success: function (response) {
                quantityInput.val(quantity);
                subtotal_text.text(response.subtotal + 'đ');
            },  
            error: function (xhr) {
                alert(xhr.responseText || 'Failed. Please try again.');
            }
        });
    }
});

</script>