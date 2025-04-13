<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

    {{-- FLowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    {{-- Aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    @stack('style')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? '' }} Sulawesi Tengah Tourism</title>
</head>

<body>
    <header class="fixed z-50 w-full font-sans" id="myElement">
        <nav class="bg-white border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto lg:px-8">
                <div href="#" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" 
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="text-primary-600 mr-2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span class="self-center text-xl font-semibold whitespace-nowrap">Sulawesi Tengah Tourism</span>
                </div>

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
                    id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:items-center lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{ route('index') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 lg:hover:text-primary-600 lg:p-0 {{ Route::current()->getName() == 'index' ? 'text-primary-600' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('destinations') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 {{ in_array(Route::current()->getName(), ['destinations', 'destinations.show']) ? 'text-primary-600' : '' }}">Destinations</a>
                        </li>
                        <li>
                            <a href="{{ route('galleries') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 {{ Route::current()->getName() == 'galleries' ? 'text-primary-600' : '' }}">Gallery</a>
                        </li>

                        <li>
                            <a href="{{ route('events') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 {{ in_array(Route::current()->getName(), ['events', 'events.show']) ? 'text-primary-600' : '' }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('articles') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 {{ in_array(Route::current()->getName(), ['articles', 'articles.show']) ? 'text-primary-600' : '' }} ">Articles</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 {{ Route::current()->getName() == 'about-us' ? 'text-primary-600' : '' }}">About
                                Us</a>
                        </li>
                        <li>
                            <a href="{{ auth()->check() ? route(auth()->user()->role . '.dashboard') : route('login') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-600 lg:p-0 {{ in_array(Route::current()->getName(), ['login', 'register']) || (auth()->check() && strpos(Route::current()->getName(), '.dashboard') !== false) ? 'text-primary-600' : '' }}">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="min-h-screen">
        {{ $slot }}
    </section>

    <footer class="bg-secondary-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <a class="flex items-center mb-4">
                        <img class="w-20" src="{{ asset('assets/img/logo.png') }}" alt="Sukarame Tourism">
                    </a>
                    <p class="text-secondary-300 mb-4">
                        Discover amazing tourist destinations in Sulawesi Tengah and book your next adventure with us.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://web.facebook.com/rakutakside" class="text-secondary-300 hover:text-white transition-colors">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@sukarame.Info77" class="text-secondary-300 hover:text-white transition-colors">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/desasukarame2022?igsh=MW55enJkcndiNzNxaw" class="text-secondary-300 hover:text-white transition-colors">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('index') }}" class="text-secondary-300 hover:text-white transition-colors {{ Route::current()->getName() == 'index' ? 'text-white' : '' }}">Home</a></li>
                        <li><a href="{{ route('destinations') }}" class="text-secondary-300 hover:text-white transition-colors {{ in_array(Route::current()->getName(), ['destinations', 'destinations.show']) ? 'text-white' : '' }}">Destinations</a></li>
                        <li><a href="{{ route('galleries') }}" class="text-secondary-300 hover:text-white transition-colors {{ Route::current()->getName() == 'galleries' ? 'text-white' : '' }}">Gallery</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Explore</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('events') }}" class="text-secondary-300 hover:text-white transition-colors {{ in_array(Route::current()->getName(), ['events', 'events.show']) ? 'text-white' : '' }}">Events</a></li>
                        <li><a href="{{ route('articles') }}" class="text-secondary-300 hover:text-white transition-colors {{ in_array(Route::current()->getName(), ['articles', 'articles.show']) ? 'text-white' : '' }}">Articles</a></li>
                        <li><a href="{{ route('about-us') }}" class="text-secondary-300 hover:text-white transition-colors {{ Route::current()->getName() == 'about-us' ? 'text-white' : '' }}">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="mt-1 text-secondary-300">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span class="text-secondary-300">Palu, Sulawesi Tengah, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="text-secondary-300">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81  2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span class="text-secondary-300">+62 123 4567 890</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="text-secondary-300">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class="text-secondary-300">info@sulawesitengahtourism.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-secondary-800 pt-8">
                <div class="text-center text-secondary-400">
                    <p>&copy; {{ date('Y') }} Wisata Sulawesi Tengah. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const myElement = document.getElementById('myElement');
        const scrollTrigger = 20; // Scroll height that triggers shadow (adjust this value)

        window.addEventListener('scroll', function() {
            if (window.scrollY > scrollTrigger) {
                myElement.classList.add('shadow-lg'); // Add shadow class
            } else {
                myElement.classList.remove('shadow-lg'); // Remove shadow class
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
