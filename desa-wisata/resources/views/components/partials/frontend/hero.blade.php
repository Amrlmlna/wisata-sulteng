<div class="relative">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-900/80 to-primary-800/50 z-10"></div>
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 relative z-20">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 id="slogan" class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight font-sans text-white md:text-5xl xl:text-6xl">
                Discover Sulawesi Tengah
            </h1>
            <p class="max-w-2xl mb-6 font-sans font-light text-white/90 lg:mb-8 md:text-lg lg:text-xl">
                Experience the untouched beauty of Central Sulawesi with its pristine beaches, vibrant coral reefs, 
                lush rainforests, and rich cultural heritage. Book your adventure today and explore one of 
                Indonesia's hidden gems.
            </p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('destinations') }}"
                    class="inline-flex justify-center font-sans px-6 py-3 text-base font-medium text-center text-primary-700 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 transition-colors">
                    Explore Destinations
                </a>
                <a href="#"
                    class="inline-flex justify-center font-sans px-6 py-3 text-base font-medium text-center text-white bg-primary-700/80 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 transition-colors">
                    Book Now
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <div class="w-full h-full rounded-lg shadow-lg overflow-hidden">
                <img src="/placeholder.svg?height=400&width=600" alt="Sulawesi Tengah Tourism" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        gsap.registerPlugin(TextPlugin)
        const myElement = document.getElementById('slogan');

        gsap.to(myElement, {
            text: "Discover Paradise <br>in Central Sulawesi",
            duration: 3,
            repeat: 0,
            ease: "none",
        });
    })
</script>
