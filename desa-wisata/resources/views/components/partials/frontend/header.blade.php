<nav class="bg-white border-b border-gray-200 fixed w-full z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" 
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                class="text-primary-600">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Sukarame Tourism</span>
        </a>
        <div class="flex md:order-2">
            <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">
                Book Now
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 {{ request()->routeIs('home') ? 'text-primary-600' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Home</a>
                </li>
                <li>
                    <a href="{{ route('destinations') }}" class="block py-2 pl-3 pr-4 {{ request()->routeIs('destinations*') ? 'text-primary-600' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Destinations</a>
                </li>
                <li>
                    <a href="{{ route('events') }}" class="block py-2 pl-3 pr-4 {{ request()->routeIs('events*') ? 'text-primary-600' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Events</a>
                </li>
                <li>
                    <a href="{{ route('articles') }}" class="block py-2 pl-3 pr-4 {{ request()->routeIs('articles*') ? 'text-primary-600' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Articles</a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" class="block py-2 pl-3 pr-4 {{ request()->routeIs('gallery') ? 'text-primary-600' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Gallery</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block py-2 pl-3 pr-4 {{ request()->routeIs('about') ? 'text-primary-600' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="bg-primary-600 pt-10">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:pt-28">
        <div class="place-self-center">
            <h1 id="slogan"
                class="text-center font-sans max-w-2xl mb-4 text-4xl font-bold leading-none tracking-tight text-white md:text-5xl xl:text-5xl">
                About Us</h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto">
           Pelajari lebih banyak tentang wisata Sulawesi Tengah dan komitmen kami untuk memberikan pelayanan travel terbaik anda
            </p>
        </div>
    </div>
</section>
