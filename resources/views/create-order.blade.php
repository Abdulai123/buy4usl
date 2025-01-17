@include('header')

{{-- <!-- Modal Backdrop -->
<div id="deals-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <!-- Modal Content -->
    <div class="bg-white p-6 rounded-xl shadow-lg w-96 text-center relative">
        <!-- Decorative Background (SVG Glow Effect) -->
        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
            <svg class="h-32 w-32" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="40" fill="none" stroke="gold" stroke-width="6" opacity="0.5" />
                <circle cx="50" cy="50" r="45" fill="none" stroke="orange" stroke-width="3" opacity="0.7" />
                <circle cx="50" cy="50" r="50" fill="none" stroke="yellow" stroke-width="2" opacity="0.3" />
            </svg>
        </div>
        <!-- Gift Icon (SVG) -->
        <div class="flex justify-center mb-6">
            <svg class="w-16 h-16 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2c-1.66 0-3 1.34-3 3h-3v3H3v10h6v5h6v-5h6V8h-3V5h-3c0-1.66-1.34-3-3-3zm0 2c.55 0 1 .45 1 1h-2c0-.55.45-1 1-1zm-4 3h3v3H6V7zm12 0v3h-5V7h5zm-4 5h4v5h-4v-5zm-6 0v5H4v-5h4zm6 5v3h-4v-3h4zm-8-5h4v5H6v-5zm8 0v5h4v-5h-4z" />
            </svg>
        </div>
        <!-- Title -->
        <h2 class="text-xl font-bold text-gray-800 mb-4">Special Deals Just for You</h2>
        <!-- Deals List -->
        <div class="space-y-4">
            <!-- Single Deal -->
            <div class="flex items-center border rounded-lg p-3 shadow-sm bg-gray-50">
                <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1 mr-4">New user only</span>
                <div class="text-left">
                    <p class="text-2xl font-bold text-gray-800">50% OFF</p>
                    <p class="text-sm text-gray-600">For any order</p>
                    <p class="text-sm text-gray-500">Expires in <span class="font-semibold">16:05:30</span></p>
                </div>
            </div>
            <!-- Single Deal -->
            <div class="flex items-center border rounded-lg p-3 shadow-sm bg-gray-50">
                <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1 mr-4">New user only</span>
                <div class="text-left">
                    <p class="text-2xl font-bold text-gray-800">35% OFF</p>
                    <p class="text-sm text-gray-600">For orders over $5.9</p>
                    <p class="text-sm text-gray-500">Expires in <span class="font-semibold">16:05:30</span></p>
                </div>
            </div>
            <!-- Single Deal -->
            <div class="flex items-center border rounded-lg p-3 shadow-sm bg-gray-50">
                <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1 mr-4">New user only</span>
                <div class="text-left">
                    <p class="text-2xl font-bold text-gray-800">25% OFF</p>
                    <p class="text-sm text-gray-600">For any order</p>
                    <p class="text-sm text-gray-500">Expires in <span class="font-semibold">16:05:30</span></p>
                </div>
            </div>
        </div>
        <!-- Collect All Button -->
        <button
            id="collect-all"
            class="mt-4 bg-black text-white py-3 px-6 rounded-lg shadow-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
            Collect All
        </button>
        <!-- Close Button -->
        <button id="close-modal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            &times;
        </button>
    </div>
</div> --}}

<!-- Modal Backdrop -->
<div id="deals-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <!-- Modal Content -->
    <div class="bg-white p-6 rounded-xl shadow-lg w-96 text-center relative">
        <!-- Decorative Background (SVG Glow Effect) -->
        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
            <svg class="h-32 w-32" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="40" fill="none" stroke="gold" stroke-width="6" opacity="0.5" />
                <circle cx="50" cy="50" r="45" fill="none" stroke="orange" stroke-width="3" opacity="0.7" />
                <circle cx="50" cy="50" r="50" fill="none" stroke="yellow" stroke-width="2" opacity="0.3" />
            </svg>
        </div>
        <!-- Gift Icon (SVG) -->
        <div class="flex justify-center mb-6">
            <svg class="w-16 h-16 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2c-1.66 0-3 1.34-3 3h-3v3H3v10h6v5h6v-5h6V8h-3V5h-3c0-1.66-1.34-3-3-3zm0 2c.55 0 1 .45 1 1h-2c0-.55.45-1 1-1zm-4 3h3v3H6V7zm12 0v3h-5V7h5zm-4 5h4v5h-4v-5zm-6 0v5H4v-5h4zm6 5v3h-4v-3h4zm-8-5h4v5H6v-5zm8 0v5h4v-5h-4z" />
            </svg>
        </div>
        <!-- Title -->
        <h2 class="text-xl font-bold text-gray-800 mb-4">Special Deals Just for You</h2>
        <!-- Deals List -->
        <div class="space-y-4">
            <!-- Single Deal -->
            <div class="flex items-center border rounded-lg p-3 shadow-sm bg-gray-50">
                <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1 mr-4">New user only</span>
                <div class="text-left">
                    <p class="text-2xl font-bold text-gray-800">50% OFF</p>
                    <p class="text-sm text-gray-600">For any order delivery</p>
                    <p class="text-sm text-gray-500">Expires in <span class="font-semibold">16:05:30</span></p>
                </div>
            </div>
            <!-- Single Deal -->
            <div class="flex items-center border rounded-lg p-3 shadow-sm bg-gray-50">
                <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1 mr-4">New user only</span>
                <div class="text-left">
                    <p class="text-2xl font-bold text-gray-800">50% OFF</p>
                    <p class="text-sm text-gray-600">For any order fees/p>
                    <p class="text-sm text-gray-500">Expires in <span class="font-semibold">16:05:30</span></p>
                </div>
            </div>
        </div>
        <!-- Collect All Button -->
        <div class="relative mt-4">
            <button
                id="collect-all"
                class="bg-black text-white py-3 px-6 rounded-lg shadow-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                Collect All
            </button>
            <!-- Finger Pointing SVG -->
            <div class="absolute top-0 right-0 transform translate-x-1/2 translate-y-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 h-12 text-gray-800" viewBox="0 0 24 24">
                    <path d="M2 12l2 2 4-4v6h12v-2H8v-4l4-4-2-2L4 8v4H2v2h2v4l-4-4L2 12z"/>
                </svg>
            </div>
        </div>
        <!-- Close Button -->
        <button id="close-modal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            &times;
        </button>
    </div>
</div>




<section class="relative bg-white text-gray-800 py-20 overflow-hidden min-h-screen flex items-center justify-center">
    <!-- Top SVG Wave -->
    <svg class="absolute top-0 left-0 w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e5e7eb" d="M0,224L1440,128L1440,0L0,0Z"></path>
    </svg>
    <!-- Form Container -->
    <div class="w-full max-w-2xl bg-white p-8 rounded-xl shadow-lg z-10">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-16">
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
        <form id="create-order-form" action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <!-- Product Container -->
            <div id="product-container" class="space-y-4">
                <div class="product-entry grid grid-cols-12 gap-4 items-center" data-index="1">
                    <!-- First Column: Product Number -->
                    <div class="col-span-1 text-center font-bold">
                        1
                    </div>
                    <!-- Second Column: Product URL -->
                    <div class="col-span-7">
                        <input type="url" name="product_urls[]"
                            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl"
                            placeholder="Shein Product URL*" required />
                    </div>
                    <!-- Third Column: Price -->
                    <div class="col-span-4">
                        <input type="number" name="prices[]" step="0.01" min="0"
                            class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl"
                            placeholder="Shein Price in USD*" required />
                    </div>
                </div>
            </div>

            <!-- Add More Button -->
            <div class="mt-4">
                <button type="button" id="add-product"
                    class="p-3 bg-green-500 text-white rounded-lg hover:bg-green-600">
                    Add More Product
                </button>
            </div>




            <!-- Price from Shein (USD) -->
            <div class="relative group">
                <input type="hidden" step="0.01" name="price_from_shein" id="price_from_shein" >
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
                <div id="drop-area"
                    class="border-2 border-gray-300 border-dashed rounded-xl p-6 text-center flex flex-col items-center justify-center cursor-pointer hover:bg-gray-100 transition-all">
                    <p class="text-gray-600 text-lg mb-2">Drag & Drop your images here</p>
                    <p class="text-gray-400 text-sm mb-4">or</p>
                    <button type="button" id="select-images"
                        class="px-6 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-colors duration-300">Select
                        Images</button>
                    <input type="file" id="product_images" name="product_images[]" multiple class="hidden"
                        accept="image/*" />
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
            <button type="submit"
                class="w-full p-4 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-all duration-300">
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
        <svg class="absolute top-12 left-4 w-24 h-24 text-blue-200 opacity-70 animate-float"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"></circle>
        </svg>
        <svg class="absolute top-1/3 right-8 w-32 h-32 text-blue-300 opacity-60 animate-float"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"></circle>
        </svg>

        <!-- User Icon -->
        <svg class="absolute top-20 left-20 w-24 h-24 text-green-400 opacity-80 animate-pulse"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M12 2C10.89 2 10 2.89 10 4C10 5.1 10.89 6 12 6C13.1 6 14 5.1 14 4C14 2.89 13.1 2 12 2ZM12 8C9.79 8 8 9.79 8 12C8 14.21 9.79 16 12 16C14.21 16 16 14.21 16 12C16 9.79 14.21 8 12 8ZM12 18C9.34 18 6.79 18.94 5 20.5C5.79 21.33 7.13 22 8.5 22H15.5C16.87 22 18.21 21.33 19 20.5C17.21 18.94 14.66 18 12 18Z">
            </path>
        </svg>

        <!-- Order Cart Icon -->
        <svg class="absolute bottom-24 left-32 w-28 h-28 text-orange-400 opacity-80 animate-bounce"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M7 4V2C7 1.45 7.45 1 8 1H16C16.55 1 17 1.45 17 2V4H18C18.55 4 19 4.45 19 5V6H5V5C5 4.45 5.45 4 6 4H7ZM7 10C7 9.45 7.45 9 8 9H16C16.55 9 17 9.45 17 10V14C17 14.55 16.55 15 16 15H8C7.45 15 7 14.55 7 14V10ZM9 16H15C15.55 16 16 16.45 16 17V19C16 19.55 15.55 20 15 20H9C8.45 20 8 19.55 8 19V17C8 16.45 8.45 16 9 16Z">
            </path>
        </svg>

        <!-- Money Icon -->
        <svg class="absolute bottom-8 right-12 w-20 h-20 text-yellow-500 opacity-80 animate-pulse"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M16 0C17.1 0 18 0.9 18 2C18 3.1 17.1 4 16 4C14.9 4 14 3.1 14 2C14 0.9 14.9 0 16 0ZM8 0C9.1 0 10 0.9 10 2C10 3.1 9.1 4 8 4C6.9 4 6 3.1 6 2C6 0.9 6.9 0 8 0ZM16 6C18.21 6 20 7.79 20 10V14C20 16.21 18.21 18 16 18H8C5.79 18 4 16.21 4 14V10C4 7.79 5.79 6 8 6H16ZM8 16H16C16.55 16 17 16.45 17 17V18C17 18.55 16.55 19 16 19H8C7.45 19 7 18.55 7 18V17C7 16.45 7.45 16 8 16ZM16 8H8C7.45 8 7 8.45 7 9V11C7 11.55 7.45 12 8 12H16C16.55 12 17 11.55 17 11V9C17 8.45 16.55 8 16 8Z">
            </path>
        </svg>

        <!-- Additional Decorative SVG -->
        <svg class="absolute bottom-4 left-12 w-16 h-16 text-pink-400 opacity-70" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
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

<script>


// Select elements
const modal = document.getElementById("deals-modal");
const closeModal = document.getElementById("close-modal");
const collectAll = document.getElementById("collect-all");

// Show the modal
function showModal() {
    modal.classList.remove("hidden");
}

// Hide the modal
function hideModal() {
    modal.classList.add("hidden");
}

// Event Listeners
closeModal.addEventListener("click", hideModal);
collectAll.addEventListener("click", () => {
    alert("Deals collected!");
    hideModal();
});

// Automatically show modal (for demonstration purposes, adjust as needed)
window.addEventListener("load", () => {
    setTimeout(showModal, 2000); // Show modal after 2 seconds
});


    const USD_TO_NLE = 28; // Conversion rate: 1 USD = 28 NLE
    const dropArea = document.getElementById("drop-area");
    const selectImagesButton = document.getElementById("select-images");
    const inputFile = document.getElementById("product_images");
    const imageThumbnailsContainer = document.getElementById("image-thumbnails");
    const errorMessage = document.getElementById("product-images-error");

    const priceFromShein = document.getElementById("price_from_shein");
    const priceInNle = document.getElementById("price_in_nle");
    const createOrderForm = document.getElementById("create-order-form");

    let selectedFiles = []; // Global array to store all selected files

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
        if (fileCount + selectedFiles.length > 10) {
            errorMessage.textContent = "You can only upload up to 10 images.";
            return;
        }

        // Add valid images to the global array and display thumbnails
        validImages.forEach((file) => {
            if (selectedFiles.length < 10) {
                selectedFiles.push(file);

                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.createElement("img");
                    imgElement.src = e.target.result;
                    imgElement.alt = file.name;
                    imgElement.classList.add("w-24", "h-24", "object-cover", "rounded-lg", "border",
                        "border-gray-300", "mr-2", "mb-2", "relative");

                    // Create a remove button
                    const removeButton = document.createElement("button");
                    removeButton.classList.add("absolute", "top-0", "right-0", "bg-red-500", "text-white",
                        "p-1", "rounded-full", "text-xs", "hover:bg-red-600", "focus:outline-none");
                    removeButton.innerText = "X";
                    removeButton.addEventListener("click", () => {
                        const index = selectedFiles.indexOf(file);
                        if (index > -1) selectedFiles.splice(index, 1); // Remove the file
                        imgElement.remove();
                    });

                    // Append thumbnail and remove button
                    const wrapper = document.createElement("div");
                    wrapper.classList.add("relative");
                    wrapper.appendChild(imgElement);
                    wrapper.appendChild(removeButton);
                    imageThumbnailsContainer.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Automatically calculate Price in NLE when Price in USD changes
    priceFromShein.addEventListener('input', function() {
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
            return;
        }

        // Append all selected files to the input before submission
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        inputFile.files = dataTransfer.files;
    });






    document.addEventListener('DOMContentLoaded', () => {
        const productContainer = document.getElementById('product-container');
        const addProductButton = document.getElementById('add-product');
        let productIndex = 1;

        // Function to create a new product entry
        function createProductField(index) {
            return `
            <div id="product-container" class="space-y-4">
    <div class="product-entry grid grid-cols-12 gap-4 items-center" data-index="${index}">
        <!-- First Column: Product Number -->
        <div class="col-span-1 text-center font-bold">
           ${index}
        </div>
        <!-- Second Column: Product URL -->
        <div class="col-span-7">
            <input type="url" name="product_urls[]" class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl"
                placeholder="Shein Product URL*" required />
        </div>
        <!-- Third Column: Price -->
        <div class="col-span-3">
            <input type="number" name="prices[]" step="0.01" min="0"
                class="w-full p-4 bg-transparent border-2 border-gray-300 rounded-xl" placeholder="Shein Price$*" required />
        </div>
        <!-- Fourth Column: Remove Button -->
        <div class="col-span-1 text-center">
            <button type="button" class="remove-product w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600">
                &times;
            </button>
        </div>
    </div>
</div>
        `;
        }

        // Add new product field
        addProductButton.addEventListener('click', () => {
            productIndex++;
            const newProductField = createProductField(productIndex);
            productContainer.insertAdjacentHTML('beforeend', newProductField);
        });

        // Remove a product field
        productContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('remove-product')) {
                const entry = event.target.closest('.product-entry');
                entry.remove();
                // Re-number remaining products
                const entries = document.querySelectorAll('.product-entry');
                entries.forEach((entry, i) => {
                    entry.querySelector('.col-span-1').textContent = i + 1;
                    entry.setAttribute('data-index', i + 1);
                });
                productIndex = entries.length;
            }
        });
    });
</script>


@include('footer')

</body>

</html>
