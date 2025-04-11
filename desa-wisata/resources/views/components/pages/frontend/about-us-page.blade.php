<x-Layouts.visitor-layout>
    <x-slot:title>About Us | </x-slot:title>
    <header>
        <x-partials.frontend.header />
    </header>

    <section class="mx-auto max-w-7xl py-16">
        <div class="px-6 md:px-8">
            <h1 class="text-4xl font-bold text-center mb-10">About Sulawesi Tengah Tourism</h1>
            
            <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                <div>
                    <img src="/placeholder.svg?height=400&width=600" alt="Sulawesi Tengah Tourism" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
                    <p class="text-secondary-600 mb-6 leading-relaxed">
                        We are dedicated to providing exceptional tourism experiences in Sulawesi Tengah. Our mission is to showcase 
                        the natural beauty, cultural heritage, and unique attractions of this region while ensuring sustainable 
                        tourism practices that benefit local communities.
                    </p>
                    <h2 class="text-2xl font-semibold mb-4">What We Offer</h2>
                    <p class="text-secondary-600 leading-relaxed">
                        From breathtaking natural landscapes to cultural experiences, Sulawesi Tengah offers a diverse range of 
                        attractions for all types of travelers. Our reservation platform makes it easy to discover, plan, 
                        and book your perfect getaway in Central Sulawesi.
                    </p>
                </div>
            </div>
            
            <div class="bg-secondary-50 rounded-xl p-8 mb-16">
                <h2 class="text-2xl font-semibold mb-6 text-center">Why Choose Us</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="text-primary-600">
                                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                                <line x1="16" y1="8" x2="2" y2="22"></line>
                                <line x1="17.5" y1="15" x2="9" y2="15"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium mb-2">Easy Booking</h3>
                        <p class="text-secondary-600">Our platform offers a seamless booking experience with instant confirmations.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="text-primary-600">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium mb-2">24/7 Support</h3>
                        <p class="text-secondary-600">Our customer service team is available around the clock to assist you.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="text-primary-600">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium mb-2">Local Expertise</h3>
                        <p class="text-secondary-600">Our team consists of local experts who know the best spots and experiences.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <h2 class="text-2xl font-semibold mb-6">Ready to Explore?</h2>
                <a href="{{ route('destinations') }}" class="inline-block px-6 py-3 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition-colors">
                    Browse Attractions
                </a>
            </div>
        </div>
    </section>

</x-Layouts.visitor-layout>
