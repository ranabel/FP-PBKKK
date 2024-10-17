<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Carousel Start -->
            <div x-data="{ activeSlide: 0 }" class="relative w-full h-auto overflow-hidden rounded-lg">
                <!-- Carousel Items -->
                <div class="absolute inset-0 flex transition-all duration-500 transform"
                     :style="transform: translateX(-${activeSlide * 100}vw); width: 300vw;">
                     
                    <!-- Slide 1 -->
                    <div class="w-full h-auto flex-shrink-0">
                        <img src="{{ asset('images/slide1.jpg') }}" alt="Slide 1" class="w-full h-auto object-cover">
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="w-full h-auto flex-shrink-0">
                        <img src="{{ asset('images/slide2.jpg') }}" alt="Slide 2" class="w-full h-auto object-cover">
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="w-full h-auto flex-shrink-0">
                        <img src="{{ asset('images/slide3.jpg') }}" alt="Slide 3" class="w-full h-auto object-cover">
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button @click="activeSlide = activeSlide === 0 ? 2 : activeSlide - 1" 
                        class="absolute left-0 top-0 bottom-0 px-4 py-2 text-white bg-gray-700">
                    Prev
                </button>
                <button @click="activeSlide = activeSlide === 2 ? 0 : activeSlide + 1" 
                        class="absolute right-0 top-0 bottom-0 px-4 py-2 text-white bg-gray-700">
                    Next
                </button>
            </div>
            <!-- Carousel End -->

            <!-- Landing Page Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6 p-6">
                <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-4">
                    {{ __("Welcome to Our Store") }}
                </h2>
                
                <p class="text-gray-600 mb-4">
                    Explore the latest collections of our products, handpicked just for you. Quality is our priority, and customer satisfaction is our goal.
                </p>
            </div>

            <!-- Additional Information Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <!-- Feature 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-2">High Quality</h3>
                    <p class="text-gray-600">We ensure that all our products are of the highest quality to meet your expectations.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-2">Fast Shipping</h3>
                    <p class="text-gray-600">Get your orders delivered to your doorstep in no time with our fast and reliable shipping service.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-2">Customer Support</h3>
                    <p class="text-gray-600">Our dedicated support team is here to assist you with any questions or concerns.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>