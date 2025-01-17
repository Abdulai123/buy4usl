

@include('header')

    <section
        class="relative bg-white text-gray-800 py-20 overflow-hidden min-h-screen flex items-center justify-center">
        <!-- Top SVG Wave -->
        <svg class="absolute top-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e5e7eb" d="M0,224L1440,128L1440,0L0,0Z"></path>
        </svg>
        <!-- Form Container -->
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg z-10">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-16">
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
                        class="w-full p-4 bg-transparent border-2 border-gray-400 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all"
                        placeholder="Email*" />
                    <small id="email-error" class="text-red-500"></small>
                </div>

                <!-- Password -->
                <div class="relative group">
                    <input type="password" name="password" id="password" required
                        class="w-full p-4 bg-transparent border-2 border-gray-400 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all"
                        placeholder="Password*" autocomplete="current-password" />
                    <small id="password-error" class="text-red-500"></small>
                </div>

                <!-- Google Recaptcha Widget -->
                <div class="flex justify-center mt-4">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                </div>


                <!-- Submit Button -->
                <button type="submit"
                    class="w-full p-4 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-all duration-300">
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
                        emailError.textContent = ''; // Clear error message
                    } else {
                        emailInput.style.borderColor = 'red';
                        emailError.textContent = 'Please enter a valid email address';
                    }
                }

                // Validate password (basic length check, you can customize it)
                function validatePassword(password) {
                    if (password.length >= 6) {
                        passwordInput.style.borderColor = 'green';
                        passwordError.textContent = ''; // Clear error message
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
            <svg class="absolute top-12 left-4 w-24 h-24 text-blue-200 opacity-70 animate-float"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg class="absolute top-1/3 right-8 w-32 h-32 text-blue-300 opacity-60 animate-float"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
            </svg>

            <!-- Star Icons -->
            <svg class="absolute bottom-16 left-8 w-16 h-16 text-yellow-400 opacity-80 animate-bounce"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                </path>
            </svg>
            <svg class="absolute top-1/4 right-4 w-20 h-20 text-blue-400 opacity-70 animate-spin-slow"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                </path>
            </svg>

            <!-- Decorative Wave -->
            <svg class="absolute bottom-0 w-full h-20 text-gray-200" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1440 320">
                <path fill="#e5e7eb" d="M0,96L1440,192L1440,320L0,320Z"></path>
            </svg>
        </div>

        <!-- Bottom SVG Wave -->
        <svg class="absolute bottom-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f1f5f9" d="M0,64L1440,160L1440,320L0,320Z"></path>
        </svg>
    </section>




@include('footer')


</body>

</html>
