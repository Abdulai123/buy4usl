@include('header')

<section id="about" class="bg-gradient-to-b from-gray-50 via-gray-100 to-white py-16">
    <div class="container mx-auto px-6 text-center">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-blue-600 mb-6">About Buy4uSL</h2>

        <!-- About Description -->
        <p class="text-lg text-gray-700 mb-8">
            Buy4uSL is a service that makes shopping from Shein easier for customers in Sierra Leone. We handle
            everything from placing the order to delivering the products to your doorstep, with free shipping. Our
            platform is designed to make international shopping seamless, affordable, and efficient, while providing an
            excellent customer experience.
        </p>

        <!-- About Image -->
        <div class="mb-8">
            <img src="{{ asset('storage/images/logo.png') }}" alt="About Buy4uSL"
                class="mx-auto rounded-lg shadow-lg w-full max-w-lg">
        </div>

        <!-- Company Values -->
        <div class="space-y-6">
            <h3 class="text-2xl font-semibold text-blue-600">Our Values</h3>
            <ul class="list-disc list-inside space-y-4 text-gray-700 item-center text-center">
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M12 5l6 6-6 6" />
                        </svg>
                    </div>
                    <span><strong>Customer-Centric:</strong> We prioritize the needs of our customers above everything
                        else.</span>
                </li>
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M12 5l6 6-6 6" />
                        </svg>
                    </div>
                    <span><strong>Affordability:</strong> We make international shopping affordable by eliminating
                        hidden costs and shipping fees.</span>
                </li>
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c0 2.21-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4zm0 12H2a10 10 0 0020 0h-10z" />
                        </svg>
                    </div>
                    <span><strong>Efficiency:</strong> Our system is designed to make your shopping experience faster
                        and easier.</span>
                </li>
                <li class="flex items-center space-x-4">
                    <div class="w-8 h-8 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c0 2.21-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4zM3 20c1.486 0 2.63-2.304 5.612-3.056C9.933 16.312 10.013 17 12 17c2.238 0 4-1.794 4-4V5H4v10c0 1.106.894 2 2 2h2z" />
                        </svg>
                    </div>
                    <span><strong>Trustworthy:</strong> We aim to build long-lasting relationships with our customers
                        based on trust and reliability.</span>
                </li>
            </ul>
        </div>

        <!-- Call to Action -->
        <div class="mt-8">
            <a href="/"
                class="inline-block bg-blue-600 text-white py-3 px-6 rounded-full text-lg font-semibold hover:bg-blue-500 transition-colors duration-300">
                Go Back Home
            </a>
        </div>
    </div>
</section>



@include('footer')

</body>

</html>
