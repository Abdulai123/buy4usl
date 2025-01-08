<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buy4uSL - Create Order</title>
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
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

<section class="relative bg-white text-gray-800 py-20 overflow-hidden min-h-screen flex items-center justify-center">
     <!-- Top SVG Wave -->
    <svg class="absolute top-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e5e7eb" d="M0,224L1440,128L1440,0L0,0Z"></path>
    </svg>
    <!-- Form Container -->
    <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-lg z-10">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/images/buy4u.png') }}" alt="Logo" class="h-16">
        </div>

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Create New Order</h2>
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<!-- Order Form -->
<form id="create-order-form" action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    <!-- Shein Product URL -->
    <div class="relative group">
        <input type="url" name="shein_url" id="shein_url" required
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Shein Product URL*" />
        <small id="shein-url-error" class="text-red-500"></small>
    </div>

    <!-- Price from Shein (USD) -->
    <div class="relative group">
        <input type="number" step="0.01" name="price_from_shein" id="price_from_shein" required
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Price from Shein in USD*" />
        <small id="price-from-shein-error" class="text-red-500"></small>
    </div>

    <!-- Price in NLE (Calculated) -->
    <div class="relative group">
        <input type="number" step="0.01" name="price_in_nle" id="price_in_nle" required readonly
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Price in NLE (auto generated)*" />
        <small id="price-in-nle-error" class="text-red-500"></small>
    </div>

    <!-- Delivery Type -->
    <div class="relative group">
        <select name="delivery_type" id="delivery_type" required
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
            <option value="">Select Delivery Type*</option>
            <option value="free">Pickup(Free)</option>
            <option value="paid">Delivered To Address (Paid)</option>
        </select>
        <small id="delivery-type-error" class="text-red-500"></small>
    </div>

    <!-- Delivery Cost (Nullable if Free) -->
    <div class="relative group">
        <input type="number" step="0.01" name="delivery_cost" id="delivery_cost"
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Delivery Cost (nullable)" />
        <small id="delivery-cost-error" class="text-red-500"></small>
    </div>

    <!-- Delivery Address -->
    <div class="relative group">
        <textarea name="address" id="address" required
            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
            placeholder="Delivery Address*" rows="4"></textarea>
        <small id="address-error" class="text-red-500"></small>
    </div>

<!-- Image Upload Section -->
<div class="relative group">
    <!-- Drop Area -->
    <div id="drop-area" class="border-2 border-gray-300 border-dashed rounded-xl p-6 text-center flex flex-col items-center justify-center cursor-pointer hover:bg-gray-100 transition-all">
        <p class="text-gray-600 text-lg mb-2">Drag & Drop your images here</p>
        <p class="text-gray-400 text-sm mb-4">or</p>
        <button type="button" id="select-images" class="px-6 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-colors duration-300">Select Images</button>
        <input type="file" id="product_images" name="product_images[]" multiple class="hidden" accept="image/*" />
    </div>

    <!-- Image Thumbnails -->
    <div id="image-thumbnails" class="mt-4 flex space-x-4 flex-wrap"></div>

    <!-- Error message -->
    <small id="product-images-error" class="text-red-500 mt-2"></small>
</div>


<!-- Google Recaptcha Widget -->
<div class="flex justify-center mt-4">
    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
</div>

    <!-- Submit Button -->
    <button type="submit" class="w-full p-4 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-all duration-300">
        Create Order
    </button>
</form>


        <!-- Feedback Links -->
        <div class="text-center mt-6 text-gray-600">
            <span>Already have an order? </span>
            <a href="/orders" class="text-blue-600 hover:underline">View Orders</a>
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

    <!-- User Icon -->
    <svg class="absolute top-20 left-20 w-24 h-24 text-green-400 opacity-80 animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2C10.89 2 10 2.89 10 4C10 5.1 10.89 6 12 6C13.1 6 14 5.1 14 4C14 2.89 13.1 2 12 2ZM12 8C9.79 8 8 9.79 8 12C8 14.21 9.79 16 12 16C14.21 16 16 14.21 16 12C16 9.79 14.21 8 12 8ZM12 18C9.34 18 6.79 18.94 5 20.5C5.79 21.33 7.13 22 8.5 22H15.5C16.87 22 18.21 21.33 19 20.5C17.21 18.94 14.66 18 12 18Z"></path>
    </svg>

    <!-- Order Cart Icon -->
    <svg class="absolute bottom-24 left-32 w-28 h-28 text-orange-400 opacity-80 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 4V2C7 1.45 7.45 1 8 1H16C16.55 1 17 1.45 17 2V4H18C18.55 4 19 4.45 19 5V6H5V5C5 4.45 5.45 4 6 4H7ZM7 10C7 9.45 7.45 9 8 9H16C16.55 9 17 9.45 17 10V14C17 14.55 16.55 15 16 15H8C7.45 15 7 14.55 7 14V10ZM9 16H15C15.55 16 16 16.45 16 17V19C16 19.55 15.55 20 15 20H9C8.45 20 8 19.55 8 19V17C8 16.45 8.45 16 9 16Z"></path>
    </svg>

    <!-- Money Icon -->
    <svg class="absolute bottom-8 right-12 w-20 h-20 text-yellow-500 opacity-80 animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M16 0C17.1 0 18 0.9 18 2C18 3.1 17.1 4 16 4C14.9 4 14 3.1 14 2C14 0.9 14.9 0 16 0ZM8 0C9.1 0 10 0.9 10 2C10 3.1 9.1 4 8 4C6.9 4 6 3.1 6 2C6 0.9 6.9 0 8 0ZM16 6C18.21 6 20 7.79 20 10V14C20 16.21 18.21 18 16 18H8C5.79 18 4 16.21 4 14V10C4 7.79 5.79 6 8 6H16ZM8 16H16C16.55 16 17 16.45 17 17V18C17 18.55 16.55 19 16 19H8C7.45 19 7 18.55 7 18V17C7 16.45 7.45 16 8 16ZM16 8H8C7.45 8 7 8.45 7 9V11C7 11.55 7.45 12 8 12H16C16.55 12 17 11.55 17 11V9C17 8.45 16.55 8 16 8Z"></path>
    </svg>

    <!-- Additional Decorative SVG -->
    <svg class="absolute bottom-4 left-12 w-16 h-16 text-pink-400 opacity-70" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
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

<script>
    const USD_TO_NLE = 28; // Conversion rate: 1 USD = 28 NLE
    const dropArea = document.getElementById("drop-area");
    const selectImagesButton = document.getElementById("select-images");
    const inputFile = document.getElementById("product_images");
    const imageThumbnailsContainer = document.getElementById("image-thumbnails");
    const errorMessage = document.getElementById("product-images-error");

    const priceFromShein = document.getElementById("price_from_shein");
    const priceInNle = document.getElementById("price_in_nle");
    const createOrderForm = document.getElementById("create-order-form");

    // Handle file selection from the file dialog
    selectImagesButton.addEventListener("click", () => {
        inputFile.click();
    });

    // Handle drag and drop events
    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("bg-gray-100");
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("bg-gray-100");
    });

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        dropArea.classList.remove("bg-gray-100");
        const files = Array.from(event.dataTransfer.files);
        handleFiles(files);
    });

    // Handle files selected by the user or dropped into the area
    inputFile.addEventListener("change", () => {
        const files = Array.from(inputFile.files);
        handleFiles(files);
    });

    // Function to handle file uploads
    function handleFiles(files) {
        const validImages = files.filter(file => file.type.startsWith("image/"));
        const fileCount = validImages.length;

        // Clear previous error message
        errorMessage.textContent = "";

        // Check if more than 10 files are selected
        if (fileCount + imageThumbnailsContainer.children.length > 10) {
            errorMessage.textContent = "You can only upload up to 10 images.";
            return;
        }

        // Process the files and display thumbnails
        validImages.forEach((file) => {
            if (imageThumbnailsContainer.children.length < 10) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imgElement = document.createElement("img");
                    imgElement.src = e.target.result;
                    imgElement.alt = file.name;
                    imgElement.classList.add("w-24", "h-24", "object-cover", "rounded-lg", "border", "border-gray-300", "mr-2", "mb-2", "relative");
                    
                    // Create a remove button
                    const removeButton = document.createElement("button");
                    removeButton.classList.add("absolute", "top-0", "right-0", "bg-red-500", "text-white", "p-1", "rounded-full", "text-xs", "hover:bg-red-600", "focus:outline-none");
                    removeButton.innerText = "X";
                    removeButton.addEventListener("click", () => {
                        imgElement.remove();
                        removeButton.remove();
                    });

                    // Append thumbnail and remove button
                    imgElement.appendChild(removeButton);
                    imageThumbnailsContainer.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Automatically calculate Price in NLE when Price in USD changes
    priceFromShein.addEventListener('input', function () {
        const usdPrice = parseFloat(priceFromShein.value);
        if (!isNaN(usdPrice)) {
            const nlePrice = usdPrice * USD_TO_NLE;
            priceInNle.value = nlePrice.toFixed(2);
        }
    });

    // Form submission handling and validation
    createOrderForm.addEventListener("submit", (event) => {
        let valid = true;

        // Basic validation for URL and address
        if (!document.getElementById("shein_url").value) {
            document.getElementById("shein-url-error").textContent = "Please enter a valid URL.";
            valid = false;
        }

        if (!document.getElementById("address").value) {
            document.getElementById("address-error").textContent = "Address is required.";
            valid = false;
        }

        // If validation fails, prevent form submission
        if (!valid) {
            event.preventDefault();
        }
    });
</script>


<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6">
        <div class="text-center md:text-left mb-4 md:mb-0">
            <p>&copy; 2024 Buy4uSL. All Rights Reserved.</p>
        </div>
        <div class="flex space-x-6">
            <a href="https://facebook.com" class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 0H7C4.79 0 3 1.79 3 4v16c0 2.21 1.79 4 4 4h8c2.21 0 4-1.79 4-4V4c0-2.21-1.79-4-4-4zm2 20c0 1.1-.9 2-2 2H7c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2v16z"/>
                </svg>
            </a>
            <a href="https://twitter.com" class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23 3c-1 0-1.9.3-2.7.8-1-.8-2.4-1.3-3.7-.8-1.3.5-2.3 2.1-2.5 3.6-.3 0-.5-.1-.8-.1-1.4 0-2.7 1.2-2.7 2.7 0 .2 0 .5.1.8-1-.1-1.9-.4-2.7-.9-.8.9-1 2.1-.5 3.1-.1 0-.3 0-.5-.1-2 .5-3.3 1.8-3.3 3.3 0 .3 0 .6.1.9C7 16 8 17 9.3 17.4c-.2.7-.6 1.4-.6 2.1 0 2.1 1.7 3.7 3.7 3.7s3.7-1.7 3.7-3.7c0-.2 0-.4-.1-.6 1.3-.3 2.3-1.3 2.3-2.6 0-.2 0-.4-.1-.6 1.3-.7 2.3-1.7 3.1-2.9-.6.3-1.4.4-2.1.5.7-1 1.1-2.3 1.1-3.6z"/>
                </svg>
            </a>
            <a href="https://instagram.com" class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2c2.2 0 4.3.9 5.7 2.3C18.1 5.7 19 7.8 19 10s-.9 4.3-2.3 5.7C16.3 15.1 14.2 16 12 16s-4.3-.9-5.7-2.3C5.7 13.7 5 11.6 5 10s.9-4.3 2.3-5.7C7.7 2.9 9.8 2 12 2zM12 0C9.6 0 7.2.8 5.4 2.2 3.6 3.8 2.8 6.2 2.8 8.6c0 2.4.8 4.8 2.6 6.4 1.8 1.6 4.2 2.4 6.6 2.4s4.8-.8 6.6-2.4C21.2 13.4 22 11 22 8.6c0-2.4-.8-4.8-2.6-6.4C16.8.8 14.4 0 12 0zm7 7.3c.3-.3.5-.7.5-1.1 0-.9-.7-1.6-1.6-1.6-.9 0-1.7.7-1.7 1.6 0 .4.2.8.5 1.1.3.3.7.5 1.1.5s.8-.2 1.1-.5z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

<script src="{{ asset('js/create-order.js') }}"></script>

</body>
</html>
