
@include('header')


<section class="relative bg-white text-gray-800 py-20 overflow-hidden">

    <!-- Orders Table Section -->
    <div class="container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg text-gray-800 ">
        <h2 class="text-5xl font-bold text-gray-800 tracking-tight">My Orders</h2>


        @if ($orders->isEmpty())
            <div class="text-center py-8">
                <h3 class="text-gray-600 text-lg">No orders found</h3>
                <p class="text-gray-500">You haven't placed any orders yet.</p>
                <a href="/create-order" class="text-blue-500 hover:underline mt-4 inline-block">
                   Create New Order
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-gray-200 rounded-md">
                    <thead>
                        <tr class="bg-gray-100 border-b border-gray-200">
                            <th class="px-4 py-3 text-left text-sm font-medium">Order #ID</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Shein URL</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Order Images</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Price (USD)</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Price (NLE)</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Delivery Type</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Delivery Cost</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Status</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Order Date</th>
                            <th class="px-4 py-3 text-left text-sm font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-4 py-2 text-sm">{{ $order->id }}</td>
                                <td class="px-4 py-2 text-sm">
                                    <a href="{{ $order->shein_url }}" class="text-blue-500 hover:underline"
                                        target="_blank">
                                        See product in Shein
                                    </a>
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    @php
                                        $images = json_decode($order->product_images, true);
                                    @endphp
                                    @if (is_array($images))
                                        <div class="relative w-24 h-24 mx-auto">
                                            <img id="image-{{ $order->id }}"
                                                src="{{ asset('storage/uploads/' . $images[0]) }}" alt="Product Image"
                                                class="w-full h-full object-cover rounded-md shadow">
                                            <button
                                                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white rounded-full px-1.5 py-1 text-xs focus:outline-none hover:bg-gray-700"
                                                onclick="prevImage('image-{{ $order->id }}', {{ json_encode($images) }})">
                                                &#10094;
                                            </button>
                                            <button
                                                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white rounded-full px-1.5 py-1 text-xs focus:outline-none hover:bg-gray-700"
                                                onclick="nextImage('image-{{ $order->id }}', {{ json_encode($images) }})">
                                                &#10095;
                                            </button>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-2 text-sm">${{ number_format($order->price_from_shein, 2) }}
                                </td>
                                <td class="px-4 py-2 text-sm">{{ number_format($order->price_in_nle, 2) }} NLE
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    <span
                                        class="px-3 py-1 rounded-full {{ $order->delivery_type === 'free' ? 'bg-green-500 text-white' : 'bg-blue-500 text-white' }}">
                                        {{ $order->delivery_type === 'free' ? 'PickUp (free)' : $order->delivery_type }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    {{ $order->delivery_cost ? number_format($order->delivery_cost, 2) . ' NLE' : 'N/A' }}
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    <span
                                        class="px-3 py-1 rounded-full 
                                        {{ $order->status === 'pending' ? 'bg-yellow-500 text-white' : '' }}
                                        {{ $order->status === 'verified' ? 'bg-green-500 text-white' : '' }}
                                        {{ $order->status === 'completed' ? 'bg-blue-500 text-white' : '' }}
                                        {{ $order->status === 'cancelled' ? 'bg-red-500 text-white' : '' }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</td>
                                <td class="px-4 py-2 text-sm">
                                    <a href="" class="text-blue-600 hover:underline">
                                        View Order
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</section>

<script>
    function updateImage(containerId, imageUrl) {
        const img = document.getElementById(containerId);
        img.src = imageUrl;
    }

    function nextImage(containerId, images) {
        const img = document.getElementById(containerId);
        const currentIndex = images.indexOf(img.src.split('/').pop());
        const nextIndex = (currentIndex + 1) % images.length;
        img.src = `/storage/uploads/${images[nextIndex]}`;
    }

    function prevImage(containerId, images) {
        const img = document.getElementById(containerId);
        const currentIndex = images.indexOf(img.src.split('/').pop());
        const prevIndex = (currentIndex - 1 + images.length) % images.length;
        img.src = `/storage/uploads/${images[prevIndex]}`;
    }
</script>




@include('footer')


</body>

</html>
