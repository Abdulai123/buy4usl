@include('header')

<section class="relative bg-gray-50 text-gray-800 py-20 overflow-hidden">
    <!-- Top SVG Wave -->
    <svg class="absolute top-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" d="M0,224L1440,128L1440,0L0,0Z"></path>
    </svg>

    <!-- Notifications Table Section -->
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-900 mb-6">Your Notifications</h1>
        <div class="space-y-4">
            @forelse ($notifications as $notification)
                <div class="flex items-center justify-between p-5 bg-white shadow-lg rounded-lg transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center space-x-4">
                        <!-- SVG Icon -->
                        <div class="w-12 h-12 p-3 rounded-full bg-gray-100 flex items-center justify-center">
                            @switch($notification->type)
                                @case('welcome')
                                    <svg class="w-6 h-6 text-green-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
                                    </svg>
                                @break

                                @case('order_created')
                                    <svg class="w-6 h-6 text-blue-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path d="M20 6H4V4h16v2zM4 20V8h16v12H4z" />
                                    </svg>
                                @break

                                @case('funds_deposited')
                                    <svg class="w-6 h-6 text-yellow-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2L4 7v6c0 5 8 9 8 9s8-4 8-9V7l-8-5zm0 12.5c-1.93 0-3.5-1.57-3.5-3.5S10.07 7.5 12 7.5 15.5 9.07 15.5 11 13.93 14.5 12 14.5z" />
                                    </svg>
                                @break

                                @case('funds_withdrawn')
                                    <svg class="w-6 h-6 text-red-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2L4 7v6c0 5 8 9 8 9s8-4 8-9V7l-8-5zm0 12.5c-1.93 0-3.5-1.57-3.5-3.5S10.07 7.5 12 7.5 15.5 9.07 15.5 11 13.93 14.5 12 14.5z" />
                                    </svg>
                                @break

                                @case('new_referral')
                                    <svg class="w-6 h-6 text-purple-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 12a5 5 0 110-10 5 5 0 010 10zm0 2c-4.42 0-8 2.68-8 6v2h16v-2c0-3.32-3.58-6-8-6z" />
                                    </svg>
                                @break

                                @case('order_verified')
                                    <svg class="w-6 h-6 text-teal-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2L1 9l11 7 11-7-11-7zm0 3l8 5-8 5-8-5 8-5zM1 15l11 7 11-7-2.5-1.5L12 20 3.5 13.5 1 15z" />
                                    </svg>
                                @break

                                @case('order_needs_action')
                                    <svg class="w-6 h-6 text-orange-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2L4 7v6c0 5 8 9 8 9s8-4 8-9V7l-8-5zm0 12.5c-1.93 0-3.5-1.57-3.5-3.5S10.07 7.5 12 7.5 15.5 9.07 15.5 11 13.93 14.5 12 14.5z" />
                                    </svg>
                                @break

                                @case('order_completed')
                                    <svg class="w-6 h-6 text-green-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2a10 10 0 100 20 10 10 0 000-20zm-2 14l-4-4 1.41-1.41L10 13.17l6.59-6.59L18 8l-8 8z" />
                                    </svg>
                                @break
                            @endswitch
                        </div>

                        <!-- Notification Content -->
                        <div class="flex-1">
                            <h2 class="text-xl font-semibold text-gray-900 mb-1">
                                {{ $notification->title }}
                                @if ($notification->is_read && \Carbon\Carbon::parse($notification->updated_at)->isToday())
                                    <span class="inline-block ml-2 px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">
                                        New
                                    </span>
                                @endif
                            </h2>
                            <p class="text-gray-600">{{ $notification->message }}</p>
                            <p class="text-sm text-gray-500 mt-2">Time: {{ \Carbon\Carbon::parse($notification->updated_at)->diffForHumans() }}</p>
                        </div>
                    </div>

                </div>
            @empty
                <p class="text-gray-500">No notifications yet.</p>
            @endforelse
        </div>
    </div>

    <!-- Bottom SVG Wave -->
    <svg class="absolute bottom-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f1f5f9" d="M0,64L1440,160L1440,320L0,320Z"></path>
    </svg>
</section>





@include('footer')




    </body>

    </html>
