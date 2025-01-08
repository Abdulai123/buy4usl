<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buy4uSL - Shop with Ease and Enjoy Seamless Shopping</title>

        
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

<header class="bg-gray-900 text-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-6">

        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('storage/images/buy4u.png') }}" alt="Buy4uSL Logo" class="w-20 h-20">
            <a href="/" class="text-2xl font-bold text-blue-500 hover:text-blue-400 transition-colors duration-300">Buy4uSL</a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-8">
            <a href="#how-it-works" class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                <!-- How It Works Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 2l9 7-9 7-9-7 9-7z"/>
                    <path d="M12 12v10"/>
                </svg>
                How It Works
            </a>
            <a href="#referrals" class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                <!-- Referrals Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M16 12l-4 4-4-4"/>
                    <path d="M16 4v16"/>
                </svg>
                Referrals
            </a>
            <a href="#rewards" class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                <!-- Rewards Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="12" cy="12" r="8"/>
                    <path d="M12 8v8"/>
                </svg>
                Rewards
            </a>
            <a href="/about" class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                <!-- About Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                    <path d="M12 6v6l4 2"/>
                </svg>
                About
            </a>
            <a href="#contact" class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                <!-- Contact Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M22 12c0-2.5-2-5-5-5s-5 2.5-5 5 2 5 5 5 5-2.5 5-5z"/>
                    <path d="M2 12c0-2.5 2-5 5-5s5 2.5 5 5-2 5-5 5-5-2.5-5-5z"/>
                </svg>
                Contact
            </a>
        </nav>

    </div>

    <!-- Logged-in User Info Below -->
    @auth
    <div class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center px-6">

            <div class="text-white flex items-center space-x-4">
                <span class="text-sm font-semibold">Logged in as: {{ Auth::user()->username }}</span>
            </div>

            <!-- User Balance Section -->
            <div class="flex items-center space-x-8">
<!-- User Balance Section -->
<div class="flex items-center space-x-8">

    <!-- Balance -->
    <div class="flex items-center text-sm font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
        <span>Balance: <span class="font-bold">{{ number_format(Auth::user()->balance, 2) }} NLE</span></span>
    </div>

    <!-- Withdraw and Deposit Section (Inline with Balance) -->
    <div class="flex items-center space-x-6">
        <!-- Withdraw Button -->
        <a href="/withdraw" class="flex items-center text-sm font-medium text-red-500 hover:text-red-600 border-b-2 border-transparent hover:border-red-500 transition duration-300">
            <!-- Withdraw Icon: Downward Arrow or Banknote -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10l5 5 5-5H7z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12"/>
            </svg>
            <span>Withdraw</span>
        </a>

        <!-- Deposit Button -->
        <a href="/deposit" class="flex items-center text-sm font-medium text-blue-500 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-500 transition duration-300">
            <!-- Deposit Icon: Upward Arrow or Plus Symbol -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 14l5-5 5 5H7z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12"/>
            </svg>
            <span>Deposit</span>
        </a>
    </div>

</div>


                <!-- Referral Balance -->
                <div class="flex items-center text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12l-4 4-4-4"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v16"/>
                    </svg>
                    <span>Referral Balance: <span class="font-bold">{{ number_format(Auth::user()->referred_balance, 2) }} NLE</span></span>
                </div>

                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                    @csrf
                    <button type="submit" id="logout-btn" class="text-red-500 hover:text-red-400 font-medium transition-colors duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>

        </div>
    </div>
{{ dd(Auth::user()->orders) }}
    <script>
    document.getElementById("logout-btn").addEventListener("click", function() {
        const logoutForm = document.createElement('form');
        logoutForm.method = 'POST';
        logoutForm.action = '{{ route('logout') }}';
        
        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';
        
        logoutForm.appendChild(csrfToken);
        
        document.body.appendChild(logoutForm);
        logoutForm.submit();
    });
</script>
    <!-- Line Separator -->
    <div class="border-t border-gray-700 my-2"></div>

    <!-- Orders, Referrals, Notifications, and Reviews Sections -->
    <div class="bg-gray-800 py-4">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6">

            <!-- Orders Section -->
            <a href="/orders" class="flex items-center justify-center space-x-2 text-white hover:text-yellow-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M3 10h18M3 16h18"/>
                </svg>
                <span class="font-medium">My Orders: <span class="font-bold">0</span></span>
            </a>

            <!-- Referrals Section -->
            <a href="/referrals" class="flex items-center justify-center space-x-2 text-white hover:text-purple-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l-4 4h3v12h2V6h3l-4-4z"/>
                </svg>
                <span class="font-medium">My Referrals: <span class="font-bold">0</span></span>
            </a>

            <!-- Notifications Section -->
            <a href="/notifications" class="flex items-center justify-center space-x-2 text-white hover:text-orange-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l9 7-9 7-9-7 9-7z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v10"/>
                </svg>
                <span class="font-medium">My Notifications: <span class="font-bold">0</span></span>
            </a>

            <!-- Reviews Section -->
            <a href="/reviews" class="flex items-center justify-center space-x-2 text-white hover:text-green-500 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l4 4-4 4-4-4 4-4z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l4 4-4 4-4-4 4-4z"/>
                </svg>
                <span class="font-medium">All Reviews: <span class="font-bold">0</span></span>
            </a>

        </div>
    </div>
    @endauth
</header>





<section class="relative bg-white text-gray-800 py-20 overflow-hidden">
    <!-- Top SVG Wave -->
    <svg class="absolute top-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" d="M0,224L1440,128L1440,0L0,0Z"></path>
    </svg>

    <!-- Orders Table Section -->
    <div class="container mx-auto px-6 py-4 bg-white text-gray-800">
        <h2 class="text-xl font-semibold mb-4">My Orders</h2>
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left">Order #ID</th>
                    <th class="px-4 py-2 text-left">Shein URL</th>
                    <th class="px-4 py-2 text-left">Product Image</th>
                    <th class="px-4 py-2 text-left">Price (NLE)</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Price (USD)</th>
                    <th class="px-4 py-2 text-left">Total Cost (NLE)</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example 1: Order Data -->
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-gray-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        123e4567-e89b-12d3-a456-426614174000
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-blue-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M3 2L3 22L21 12L3 2Z"></path></svg>
                        <a href="https://www.shein.com/Trendy-Red-T-Shirt-p-12345.html" class="text-blue-500 hover:underline" target="_blank">View Product</a>
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-gray-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M7 3H17V21H7V3Z"></path></svg>
                        <img src="https://www.shein.com/images/product_image.jpg" alt="Product Image" class="w-16 h-16 object-cover">
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-green-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        1,000.00
                    </td>
                    <td class="px-4 py-2 capitalize">
                        <svg class="w-5 h-5 text-yellow-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        Pending
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-red-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        1,200.00
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-blue-600 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        <a href="/orders/123e4567-e89b-12d3-a456-426614174000" class="text-blue-600 hover:underline">View Order</a>
                    </td>
                </tr>

                <!-- Example 2: Order Data -->
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-gray-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        456e7890-e12b-34f5-a678-567614174000
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-blue-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M3 2L3 22L21 12L3 2Z"></path></svg>
                        <a href="https://www.shein.com/Blue-Jeans-p-67890.html" class="text-blue-500 hover:underline" target="_blank">View Product</a>
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-gray-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M7 3H17V21H7V3Z"></path></svg>
                        <img src="https://www.shein.com/images/product_image2.jpg" alt="Product Image" class="w-16 h-16 object-cover">
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-green-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        850.00
                    </td>
                    <td class="px-4 py-2 capitalize">
                        <svg class="w-5 h-5 text-yellow-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        Verified
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-red-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        1,100.00
                    </td>
                    <td class="px-4 py-2">
                        <svg class="w-5 h-5 text-blue-600 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path></svg>
                        <a href="/orders/456e7890-e12b-34f5-a678-567614174000" class="text-blue-600 hover:underline">View Order</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Decorative SVGs -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <!-- Floating Circles -->
        <svg class="absolute top-12 left-4 w-24 h-24 text-blue-200 opacity-70 animate-float" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"></circle>
        </svg>
        <svg class="absolute top-1/3 right-8 w-32 h-32 text-blue-300 opacity-60 animate-float" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"></circle>
        </svg>

        <!-- Star Icons -->
        <svg class="absolute bottom-16 left-8 w-16 h-16 text-yellow-400 opacity-80 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
        </svg>
        <svg class="absolute top-1/4 right-4 w-20 h-20 text-blue-400 opacity-70 animate-spin-slow" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
        </svg>

        <!-- Decorative Wave -->
        <svg class="absolute bottom-0 w-full h-20 text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" d="M0,96L1440,192L1440,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Bottom SVG Wave -->
    <svg class="absolute bottom-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f1f5f9" d="M0,64L1440,160L1440,320L0,320Z"></path>
    </svg>
</section>






<footer id="contact" class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Footer Content -->
        <div class="text-center mb-8">
            <p class="text-lg font-medium">&copy; 2024 <span class="font-bold">Buy4uSL</span>. All rights reserved.</p>
        </div>

<!-- Social Media Links -->
<div class="flex justify-center space-x-8 mt-8">
    <span class="text-gray-700 font-medium">Find Us On</span>

    <!-- Facebook Link -->
    <a href="https://facebook.com" class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 12.072c0 5.577-4.607 10.072-10.032 10.072-5.52 0-9.998-4.438-9.998-9.998 0-5.554 4.527-10.013 9.99-10.013 5.423 0 9.998 4.433 9.998 9.938zm-5.062-1.236h-2.212v9.986H12.63V10.836h-1.29v-2.117h1.29V7.053c0-2.123 1.285-3.307 3.245-3.307.953 0 1.78.07 2.03.103v2.27h-1.416c-1.099 0-1.29.52-1.29 1.274v1.672h2.053l-.265 2.117z"/>
        </svg>
    </a>

    <!-- Twitter Link -->
    <a href="https://twitter.com" class="text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:scale-125">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.46 6.006c-.79.35-1.64.59-2.54.7a4.47 4.47 0 0 0 1.98-2.47c-.84.5-1.76.86-2.74 1.06A4.45 4.45 0 0 0 15.47 3c-2.47 0-4.46 2-4.46 4.46 0 .35.04.7.1 1.04-3.71-.19-7.01-1.96-9.2-4.65-.39.67-.62 1.45-.62 2.28 0 1.58.8 2.97 2.02 3.79-.75-.02-1.46-.23-2.08-.57v.06c0 2.21 1.57 4.06 3.64 4.48-.38.1-.79.16-1.19.16-.29 0-.57-.03-.85-.08.58 1.8 2.28 3.12 4.29 3.15-1.57 1.23-3.56 1.96-5.72 1.96-.37 0-.73-.02-1.09-.06 2.03 1.3 4.44 2.06 7.01 2.06 8.41 0 13.03-7 13.03-13.03 0-.2 0-.41-.02-.61A9.16 9.16 0 0 0 24 4.45a9.02 9.02 0 0 1-2.54.7z"/>
        </svg>
    </a>

    <!-- Instagram Link -->
    <a href="https://instagram.com" class="text-gray-400 hover:text-pink-500 transition-all duration-300 transform hover:scale-125">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2.163c3.236 0 3.637 0 4.913.071 1.268.07 2.272.316 2.926.697 1.081.515 1.917 1.352 2.432 2.432.381.654.627 1.658.697 2.926.071 1.276.071 1.677.071 4.913 0 3.236 0 3.637-.071 4.913-.07 1.268-.316 2.272-.697 2.926-.515 1.08-1.352 1.917-2.432 2.432-.654.381-1.658.627-2.926.697-1.276.071-1.677.071-4.913.071-3.236 0-3.637 0-4.913-.071-1.268-.07-2.272-.316-2.926-.697-1.081-.515-1.917-1.352-2.432-2.432-.381-.654-.627-1.658-.697-2.926-.071-1.276-.071-1.677-.071-4.913 0-3.236 0-3.637.071-4.913.07-1.268.316-2.272.697-2.926.515-1.08 1.352-1.917 2.432-2.432.654-.381 1.658-.627 2.926-.697 1.276-.071 1.677-.071 4.913-.071zm0 5.837a6.163 6.163 0 1 0 0 12.326 6.163 6.163 0 0 0 0-12.326zm0 9.63a3.467 3.467 0 1 1 0-6.933 3.467 3.467 0 0 1 0 6.933zm6.234-9.19c-.481 0-.87-.389-.87-.87s.389-.87.87-.87.87.389.87.87-.389.87-.87.87z"/>
        </svg>
    </a>
</div>

    </div>
</footer>


    </body>
</html>
