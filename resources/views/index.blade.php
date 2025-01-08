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
        <path fill="#e5e7eb" d="M0,224L1440,128L1440,0L0,0Z"></path>
    </svg>

<!-- Content -->
<div class="relative z-10 text-center px-6 lg:px-12 max-w-5xl mx-auto">
    <h1 class="text-5xl font-extrabold tracking-tight leading-tight">
        Shop <span class="text-blue-600">Shein Products</span> with Ease
    </h1>
    <p class="mt-6 text-lg font-medium text-gray-600">
        Get <span class="text-green-500 font-semibold">Free Shipping</span>, pay only a <span class="text-yellow-500 font-semibold">5% or less fee</span>, and no credit card is required! Plus, enjoy home delivery right to your doorstep.
    </p>
<div class="mt-8 flex justify-center space-x-4">
    @auth
        <!-- Create Order Button (Visible for authenticated users) -->
        <a href="/create-order" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-medium px-8 py-3 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Create Order Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                <path d="M9 9h6v6H9z"/>
            </svg>
            Create Order
        </a>
    @else
        <!-- Sign Up Button (Visible for non-authenticated users) -->
        <a href="/signup" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-medium px-8 py-3 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Sign Up Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                <path d="M12 6v6l4 2"/>
            </svg>
            Sign Up
        </a>

        <!-- Login Button (Visible for non-authenticated users) -->
        <a href="/login" class="inline-flex items-center bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-medium px-8 py-3 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Login Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12l4 4-4 4M19 12H7"/>
            </svg>
            Login
        </a>
    @endauth
</div>

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
            <path fill="#e5e7eb" d="M0,96L1440,192L1440,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Bottom SVG Wave -->
    <svg class="absolute bottom-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f1f5f9" d="M0,64L1440,160L1440,320L0,320Z"></path>
    </svg>
</section>



<section id="how-it-works" class="py-16 bg-gradient-to-b from-gray-50 via-gray-100 to-white">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Title and Intro -->
        <div class="text-center max-w-4xl mx-auto mb-16">
            <h2 class="text-5xl font-extrabold tracking-tight text-gray-900">How It Works?</h2>
            <p class="mt-6 text-lg text-gray-700 leading-relaxed">
                We take the hassle out of shopping from Shein(No credit card, order less then 50 Nle). With <span class="text-blue-600 font-medium">Buy4uSL</span>, you focus on picking your favorites—we'll handle the rest.
            </p>
        </div>

        <!-- Steps -->
        <div class="grid gap-12 md:grid-cols-3">
            <!-- Step 1 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-xl bg-white shadow-lg group-hover:shadow-xl transition-shadow">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-100 via-blue-50 to-white opacity-50"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-blue-100 text-blue-600 rounded-full mb-6">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21l-6-6 6-6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Step 1: Browse & Snap</h3>
                        <p class="mt-4 text-gray-600">
                            Explore Shein, fill your cart, and screenshot your picks. Include all the juicy details.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-xl bg-white shadow-lg group-hover:shadow-xl transition-shadow">
                    <div class="absolute inset-0 bg-gradient-to-tr from-green-100 via-green-50 to-white opacity-50"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-green-100 text-green-600 rounded-full mb-6">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l6 6-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Step 2: Create Your Order</h3>
                        <p class="mt-4 text-gray-600">
                            Enter the prices from Shein, upload your screenshots, and let our calculator handle the conversion to Sierra Leone's currency.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-xl bg-white shadow-lg group-hover:shadow-xl transition-shadow">
                    <div class="absolute inset-0 bg-gradient-to-tr from-purple-100 via-purple-50 to-white opacity-50"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-purple-100 text-purple-600 rounded-full mb-6">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c0 2.21-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4zm0 12H2a10 10 0 0020 0h-10z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Step 3: Relax & Verify</h3>
                        <p class="mt-4 text-gray-600">
                            Wait for us to verify the products and prices. Once everything checks out, sit back while we process your order!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="payment-methods" class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Title and Intro -->
        <div class="text-center max-w-4xl mx-auto mb-12">
            <h2 class="text-5xl font-extrabold tracking-tight text-gray-900">Easy Payment Options</h2>
            <p class="mt-6 text-lg text-gray-700 leading-relaxed">
                We've made payments seamless. Fund your wallet with your preferred method to complete orders effortlessly.
            </p>
        </div>

        <!-- Payment Methods -->
        <div class="grid gap-12 md:grid-cols-2">
            <!-- Orange Money -->
            <div class="flex items-center p-8 bg-gradient-to-tr from-orange-100 via-orange-50 to-white rounded-lg shadow-lg">
                <img src="{{ asset('storage/images/orangemoney.png') }}" alt="Orange Money" class="w-16 h-16 mr-6">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Orange Money</h3>
                    <p class="mt-4 text-gray-600">
                        Deposit funds directly into your Buy4uSL wallet using Orange Money for fast and secure transactions.
                    </p>
                </div>
            </div>

            <!-- Afrimoney -->
            <div class="flex items-center p-8 bg-gradient-to-tr from-green-100 via-green-50 to-white rounded-lg shadow-lg">
                <img src="{{ asset('storage/images/afrimoney.png') }}" alt="Afrimoney" class="w-16 h-16 mr-6 rounded-md">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Afrimoney</h3>
                    <p class="mt-4 text-gray-600">
                        Top up your wallet with Afrimoney to quickly place and complete your orders without delays.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="referrals" class="py-16 bg-gradient-to-b from-gray-50 via-gray-100 to-white">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Title and Intro -->
        <div class="text-center max-w-4xl mx-auto mb-16">
            <h2 class="text-5xl font-extrabold tracking-tight text-gray-900">Earn with Referrals</h2>
            <p class="mt-6 text-lg text-gray-700 leading-relaxed">
                Turn your connections into earnings! With <span class="text-blue-600 font-medium">Buy4uSL's referral program</span>, you can earn <span class="text-green-600 font-semibold">10% to 25%</span> of what we earn from referred orders. Share, refer, and grow your wallet!
            </p>
        </div>

        <!-- Steps -->
        <div class="grid gap-12 md:grid-cols-3">
            <!-- Step 1 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-xl bg-white shadow-lg group-hover:shadow-xl transition-shadow">
                    <div class="absolute inset-0 bg-gradient-to-tr from-yellow-100 via-yellow-50 to-white opacity-50"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full mb-6">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l-5-5m0 0l5-5m-5 5h16" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Step 1: Get Your Referral Code</h3>
                        <p class="mt-4 text-gray-600">
                            Sign up or log in to your account to receive a unique referral code that you can share with others.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-xl bg-white shadow-lg group-hover:shadow-xl transition-shadow">
                    <div class="absolute inset-0 bg-gradient-to-tr from-red-100 via-red-50 to-white opacity-50"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-red-100 text-red-600 rounded-full mb-6">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.5 4.5L15 19m0-9h-3a4 4 0 01-4-4V4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Step 2: Share & Refer</h3>
                        <p class="mt-4 text-gray-600">
                            Spread the word! Share your referral code with friends, family, and social networks. Every order placed using your code counts.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-xl bg-white shadow-lg group-hover:shadow-xl transition-shadow">
                    <div class="absolute inset-0 bg-gradient-to-tr from-green-100 via-green-50 to-white opacity-50"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-green-100 text-green-600 rounded-full mb-6">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16l4 4m0 0l4-4m-4 4V4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Step 3: Earn & Track</h3>
                        <p class="mt-4 text-gray-600">
                            For every order placed through your referral, earn 20% to 40% of our profit. Track your earnings directly on your dashboard.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="bg-gray-50 py-16 relative overflow-hidden">
    <div class="container mx-auto text-center px-6 lg:px-12 relative z-10">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-6">
            Ready to Start Shopping?
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            Browse Shein's top picks and let us handle the rest with <span class="text-blue-500 font-semibold">free shipping</span>, <span class="text-green-500 font-semibold">low fees</span>, and no credit card needed. We’ll even deliver right to your doorstep!
        </p>
<div class="mt-8 flex justify-center space-x-4">
    @auth
        <!-- Create Order Button (Visible for authenticated users) -->
        <a href="/create-order" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-medium px-8 py-3 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Create Order Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                <path d="M9 9h6v6H9z"/>
            </svg>
            Create Order
        </a>
    @else
        <!-- Sign Up Button (Visible for non-authenticated users) -->
        <a href="/signup" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-medium px-8 py-3 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Sign Up Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                <path d="M12 6v6l4 2"/>
            </svg>
            Sign Up
        </a>

        <!-- Login Button (Visible for non-authenticated users) -->
        <a href="/login" class="inline-flex items-center bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-medium px-8 py-3 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Login Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12l4 4-4 4M19 12H7"/>
            </svg>
            Login
        </a>
    @endauth
</div>

    </div>

    <!-- Top Decorative Wave -->
    <svg class="absolute top-0 left-0 w-full h-16 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="currentColor" d="M0,64L1440,32L1440,0L0,0Z"></path>
    </svg>

    <!-- Bottom Decorative Wave -->
    <svg class="absolute bottom-0 left-0 w-full h-16 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="currentColor" d="M0,96L1440,160L1440,320L0,320Z"></path>
    </svg>

    <!-- Floating Decorative Circles -->
    <svg class="absolute top-8 right-16 w-16 h-16 text-blue-100 opacity-60 animate-float" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10"></circle>
    </svg>
    <svg class="absolute bottom-8 left-12 w-20 h-20 text-blue-200 opacity-40 animate-float" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10"></circle>
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
