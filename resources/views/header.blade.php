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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <header class="bg-gray-900 text-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">

            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Buy4uSL Logo" class="w-20 h-20 rounded-md">
                <a href="/"
                    class="text-2xl font-bold text-blue-500 hover:text-blue-400 transition-colors duration-300">Buy4uSL</a>
            </div>

            <!-- Navigation Menu -->
            <nav class="hidden md:flex space-x-8">
                <a href="/#how-it-works"
                    class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                    <!-- How It Works Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 2l9 7-9 7-9-7 9-7z" />
                        <path d="M12 12v10" />
                    </svg>
                    How It Works
                </a>
                <a href="/#referrals"
                    class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                    <!-- Referrals Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M16 12l-4 4-4-4" />
                        <path d="M16 4v16" />
                    </svg>
                    Referrals
                </a>
                <a href="/#rewards"
                    class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                    <!-- Rewards Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <circle cx="12" cy="12" r="8" />
                        <path d="M12 8v8" />
                    </svg>
                    Rewards
                </a>
                <a href="/about"
                    class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                    <!-- About Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                    About
                </a>
                <a href="/#contact"
                    class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
                    <!-- Contact Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M22 12c0-2.5-2-5-5-5s-5 2.5-5 5 2 5 5 5 5-2.5 5-5z" />
                        <path d="M2 12c0-2.5 2-5 5-5s5 2.5 5 5-2 5-5 5-5-2.5-5-5z" />
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
                <div class="flex items-center space-x-8">
                    <!-- Balance -->
                    <div class="flex items-center text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-400 mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span>Balance: <span class="font-bold">{{ number_format(Auth::user()->balance, 2) }} NLE</span></span>
                    </div>

                    <!-- Withdraw and Deposit Section -->
                    <div class="flex items-center space-x-6">
                        <a href="/withdraw" class="flex items-center text-sm font-medium text-red-500 hover:text-red-600 border-b-2 border-transparent hover:border-red-500 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10l5 5 5-5H7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12" />
                            </svg>
                            <span>Withdraw</span>
                        </a>
                        <a href="/deposit" class="flex items-center text-sm font-medium text-blue-500 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-500 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 14l5-5 5 5H7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12" />
                            </svg>
                            <span>Deposit</span>
                        </a>
                    </div>
                </div>

                <!-- Referral Balance -->
                <div class="flex items-center text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400 mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12l-4 4-4-4" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v16" />
                    </svg>
                    <span>Referral Balance: <span class="font-bold">{{ number_format(Auth::user()->referred_balance, 2) }} NLE</span></span>
                </div>

                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                    @csrf
                    <button type="submit" id="logout-btn" class="text-red-500 hover:text-red-400 font-medium transition-colors duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M3 10h18M3 16h18" />
                </svg>
                <span class="font-medium">My Orders: <span class="font-bold">{{ Auth::user()->orders()->whereIn('status', ['pending', 'verified'])->count() }}</span></span>
            </a>

            <!-- Referrals Section -->
            <a href="/referrals" class="flex items-center justify-center space-x-2 text-white hover:text-purple-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l-4 4h3v12h2V6h3l-4-4z" />
                </svg>
                <span class="font-medium">My Referrals: <span class="font-bold">{{ Auth::user()->referrals->count() }}</span></span>
            </a>

            <!-- Notifications Section -->
            <a href="/notifications" class="flex items-center justify-center space-x-2 text-white hover:text-orange-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l9 7-9 7-9-7 9-7z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v10" />
                </svg>
                <span class="font-medium">My Notifications: <span class="font-bold">{{ Auth::user()->notifications()->where('is_read', 0)->count() }}</span></span>
            </a>

            <!-- Reviews Section -->
            <a href="/reviews" class="flex items-center justify-center space-x-2 text-white hover:text-green-500 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l4 4-4 4-4-4 4-4z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l4 4-4 4-4-4 4-4z" />
                </svg>
                <span class="font-medium">All Reviews: <span class="font-bold">{{ Auth::user()->reviews->count() }}</span></span>
            </a>

        </div>
    </div>
@endauth

    </header>
