<x-adminlayout>
   <div class="flex flex-nowrap gap-5">
      <div class="flex-1 shadow-md rounded-md bg-white p-5 space-y-5 justify-center flex flex-col">
         <p class="font-bold text-apple_backgroundColor">Tổng số sản phẩm</p>
         <p class="font-bold text-2xl text-apple_backgroundColor">{{count($products)}}</p>
      </div>
      <div class="flex-1 shadow-md rounded-md bg-white p-5 space-y-5 justify-center flex flex-col">
         <p class="font-bold text-apple_backgroundColor">Số lượng User</p>
         <p class="font-bold text-2xl text-apple_backgroundColor">{{count($users)}}</p>
      </div>
      <div class="flex-1 shadow-md rounded-md bg-white p-5 space-y-5 justify-center flex flex-col">
         <p class="font-bold text-apple_backgroundColor">Số đơn hàng</p>
         <p class="font-bold text-2xl text-apple_backgroundColor">
            {{count($orders)}}
         </p>
      </div>
      <div class="flex-1 shadow-md rounded-md bg-white p-5 space-y-5 justify-center flex flex-col">
         <p class="font-bold text-apple_backgroundColor">Doanh thu</p>
         <p class="font-bold text-2xl text-apple_backgroundColor">
            {{number_format($sum).' đ'}}
         </p>
      </div>
   </div>
   <canvas id="chart" width="300" height="100" class="bg-white my-5 p-5 shadow-md rounded-md"></canvas>
   <div class="flex gap-5 mt-5">
      <table class="flex-1 table-auto bg-white shadow-md rounded-md overflow-hidden">
         <thead class="bg-apple_backgroundColor text-white">
            <tr>
               <th class="p-4">Tên sản phẩm</th>
               <th class="p-4">Số lượng trong kho</th>
               <th class="p-4">Giá gốc</th>
               <th class="p-4">Giá khuyến mãi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($products->take(8) as $product)
               <tr class="border-b border-gray-200">
                  <td class="p-4">{{$product->name}}</td>
                  <td class="p-4">{{$product->stock}}</td>
                  <td class="p-4">{{number_format($product->old_price).' đ'}}</td>
                  <td class="p-4">{{number_format($product->actual_price).' đ'}}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
      <table class="flex-1 table-auto bg-white shadow-md rounded-md overflow-hidden">
         <thead class="bg-apple_backgroundColor text-white">
            <tr>
               <th class="p-4">Mã đơn hàng</th>
               <th class="p-4">Khách hàng</th>
               <th class="p-4">Tỉnh/Thành phố</th>
               <th class="p-4">Ngày đặt hàng</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($orders->take(8) as $order)
               <tr class="border-b border-gray-200">
                  <td class="p-4">{{$order->id}}</td>
                  <td class="p-4">{{$order->fullName}}</td>
                  <td class="p-4">{{$order->city}}</td>
                  <td class="p-4">{{$order->created_at}}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>
      var ctx = document.getElementById('chart').getContext('2d');
      var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
            labels: ['Sản phẩm', 'User', 'Đơn hàng'],
            datasets: [{
               label: 'Thống kê',
               data: [{{count($products)}}, {{count($users)}}, {{count($orders)}}],
               backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
               ],
               borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
               ],
               borderWidth: 1
            }]
         },
         options: {
            scales: {
               y: {
                  beginAtZero: true
               }
            }
         }
      });
   </script>
</x-adminlayout>
