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
            <img src="{{ asset('storage/images/buy4u.png') }}" alt="Buy4uSL Logo" class="w-12 h-12">
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
            <a href="#about" class="text-gray-400 hover:text-blue-500 font-medium transition duration-300 flex items-center">
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

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</header>

<section id="about" class="bg-gradient-to-b from-gray-50 via-gray-100 to-white py-16">
    <div class="container mx-auto px-6 text-center">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-blue-600 mb-6">About Buy4uSL</h2>

        <!-- About Description -->
        <p class="text-lg text-gray-700 mb-8">
            Buy4uSL is a service that makes shopping from Shein easier for customers in Sierra Leone. We handle everything from placing the order to delivering the products to your doorstep, with free shipping. Our platform is designed to make international shopping seamless, affordable, and efficient, while providing an excellent customer experience.
        </p>

        <!-- About Image -->
        <div class="mb-8">
            <img src="{{ asset('storage/images/buy4u.png') }}" alt="About Buy4uSL" class="mx-auto rounded-lg shadow-lg w-full max-w-lg">
        </div>

        <!-- Company Values -->
        <div class="space-y-6">
            <h3 class="text-2xl font-semibold text-blue-600">Our Values</h3>
            <ul class="list-disc list-inside space-y-4 text-gray-700 item-center text-center">
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l6 6-6 6" />
                        </svg>
                    </div>
                    <span><strong>Customer-Centric:</strong> We prioritize the needs of our customers above everything else.</span>
                </li>
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l6 6-6 6" />
                        </svg>
                    </div>
                    <span><strong>Affordability:</strong> We make international shopping affordable by eliminating hidden costs and shipping fees.</span>
                </li>
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c0 2.21-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4zm0 12H2a10 10 0 0020 0h-10z" />
                        </svg>
                    </div>
                    <span><strong>Efficiency:</strong> Our system is designed to make your shopping experience faster and easier.</span>
                </li>
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c0 2.21-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4zM3 20c1.486 0 2.63-2.304 5.612-3.056C9.933 16.312 10.013 17 12 17c2.238 0 4-1.794 4-4V5H4v10c0 1.106.894 2 2 2h2z" />
                        </svg>
                    </div>
                    <span><strong>Trustworthy:</strong> We aim to build long-lasting relationships with our customers based on trust and reliability.</span>
                </li>
            </ul>
        </div>

        <!-- Call to Action -->
        <div class="mt-8">
            <a href="/" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-full text-lg font-semibold hover:bg-blue-500 transition-colors duration-300">
                Go Back Home
            </a>
        </div>
    </div>
</section>



<footer id="contact" class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Footer Content -->
        <div class="text-center mb-8">
            <p class="text-lg font-medium">&copy; 2024 <span class="font-bold">Buy4uSL</span>. All rights reserved.</p>
        </div>

        <!-- Social Media Links -->
        <div class="flex justify-center space-x-8">
            <a href="https://facebook.com" class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 12.072c0 5.577-4.607 10.072-10.032 10.072-5.52 0-9.998-4.438-9.998-9.998 0-5.554 4.527-10.013 9.99-10.013 5.423 0 9.998 4.433 9.998 9.938zm-5.062-1.236h-2.212v9.986H12.63V10.836h-1.29v-2.117h1.29V7.053c0-2.123 1.285-3.307 3.245-3.307.953 0 1.78.07 2.03.103v2.27h-1.416c-1.099 0-1.29.52-1.29 1.274v1.672h2.053l-.265 2.117z"/>
                </svg>
            </a>
            <a href="https://twitter.com" class="text-gray-400 hover:text-blue-400 transition-colors duration-200">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.46 6.006c-.79.35-1.64.59-2.54.7a4.47 4.47 0 0 0 1.98-2.47c-.84.5-1.76.86-2.74 1.06A4.45 4.45 0 0 0 15.47 3c-2.47 0-4.46 2-4.46 4.46 0 .35.04.7.1 1.04-3.71-.19-7.01-1.96-9.2-4.65-.39.67-.62 1.45-.62 2.28 0 1.58.8 2.97 2.02 3.79-.75-.02-1.46-.23-2.08-.57v.06c0 2.21 1.57 4.06 3.64 4.48-.38.1-.79.16-1.19.16-.29 0-.57-.03-.85-.08.58 1.8 2.28 3.12 4.29 3.15-1.57 1.23-3.56 1.96-5.72 1.96-.37 0-.73-.02-1.09-.06 2.03 1.3 4.44 2.06 7.01 2.06 8.41 0 13.03-7 13.03-13.03 0-.2 0-.41-.02-.61A9.16 9.16 0 0 0 24 4.45a9.02 9.02 0 0 1-2.54.7z"/>
                </svg>
            </a>
            <a href="https://instagram.com" class="text-gray-400 hover:text-pink-500 transition-colors duration-200">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.236 0 3.637 0 4.913.071 1.268.07 2.272.316 2.926.697 1.081.515 1.917 1.352 2.432 2.432.381.654.627 1.658.697 2.926.071 1.276.071 1.677.071 4.913 0 3.236 0 3.637-.071 4.913-.07 1.268-.316 2.272-.697 2.926-.515 1.08-1.352 1.917-2.432 2.432-.654.381-1.658.627-2.926.697-1.276.071-1.677.071-4.913.071-3.236 0-3.637 0-4.913-.071-1.268-.07-2.272-.316-2.926-.697-1.081-.515-1.917-1.352-2.432-2.432-.381-.654-.627-1.658-.697-2.926-.071-1.276-.071-1.677-.071-4.913 0-3.236 0-3.637.071-4.913.07-1.268.316-2.272.697-2.926.515-1.08 1.352-1.917 2.432-2.432.654-.381 1.658-.627 2.926-.697 1.276-.071 1.677-.071 4.913-.071zm0 5.837a6.163 6.163 0 1 0 0 12.326 6.163 6.163 0 0 0 0-12.326zm0 9.63a3.467 3.467 0 1 1 0-6.933 3.467 3.467 0 0 1 0 6.933zm6.234-9.19c-.481 0-.87-.389-.87-.87s.389-.87.87-.87.87.389.87.87-.389.87-.87.87z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>


    </body>
</html>
