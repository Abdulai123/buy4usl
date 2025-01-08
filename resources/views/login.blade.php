<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buy4uSL - Shop with Ease and Enjoy Seamless Shopping</title>

        <script async src="https://www.google.com/recaptcha/api.js"></script>
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

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</header>


<section class="relative bg-white text-gray-800 py-20 overflow-hidden min-h-screen flex items-center justify-center">
    <!-- Top SVG Wave -->
    <svg class="absolute top-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e5e7eb" d="M0,224L1440,128L1440,0L0,0Z"></path>
    </svg>
    <!-- Form Container -->
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg z-10">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/images/buy4u.png') }}" alt="Logo" class="h-16">
        </div>

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">LogIn</h2>
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<!-- Form Starts Here -->
<form id="login-form" action="" method="POST" class="space-y-6">
    @csrf

    <!-- Email -->
    <div class="relative group">
        <input type="email" name="email" id="email" required
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Email*" />
        <small id="email-error" class="text-red-500"></small>
    </div>

    <!-- Password -->
    <div class="relative group">
        <input type="password" name="password" id="password" required
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Password*" autocomplete="current-password" />
        <small id="password-error" class="text-red-500"></small>
    </div>

<!-- Google Recaptcha Widget -->
<div class="flex justify-center mt-4">
    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
</div>


    <!-- Submit Button -->
    <button type="submit" class="w-full p-4 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-all duration-300">
        Log In
    </button>
</form>


<script>
    // Get the form elements
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const emailError = document.getElementById('email-error');
const passwordError = document.getElementById('password-error');

// Real-time email validation
emailInput.addEventListener('input', function() {
    validateEmail(emailInput.value);
});

// Real-time password validation
passwordInput.addEventListener('input', function() {
    validatePassword(passwordInput.value);
});

// Validate email
function validateEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (emailRegex.test(email)) {
        emailInput.style.borderColor = 'green';
        emailError.textContent = '';  // Clear error message
    } else {
        emailInput.style.borderColor = 'red';
        emailError.textContent = 'Please enter a valid email address';
    }
}

// Validate password (basic length check, you can customize it)
function validatePassword(password) {
    if (password.length >= 6) {
        passwordInput.style.borderColor = 'green';
        passwordError.textContent = '';  // Clear error message
    } else {
        passwordInput.style.borderColor = 'red';
        passwordError.textContent = 'Password must be at least 6 characters';
    }
}
</script>
        <div class="text-center mt-6 text-gray-600">
            <span>Don't have an account? </span>
            <a href="/signup" class="text-blue-600 hover:underline">SignUp here</a>
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