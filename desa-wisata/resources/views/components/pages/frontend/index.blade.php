<x-Layouts.visitor-layout>
    <x-slot:title>Home | </x-slot:title>
    <header>
        <x-partials.frontend.hero />
    </header>

    <section class="font-sans py-16">
        <div class="mb-8 text-4xl font-extrabold text-center">
            <h1 class="font-sans">Daya Tarik Wisata Sulawesi Tengah</h1>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4 px-4 md:px-0">
            @forelse ($destinations as $destination)
                <div class="card-container">
                    <x-partials.frontend.card-destination :$destination />
                </div>
            @empty
                <p class="font-semibold text-center text-gray-500">Belum ada Daya Tarik Wisata
                </p>
            @endforelse
        </div>
        <div class="mt-10 text-center">
            <a href="{{ route('destinations') }}"
                class="px-6 py-3 text-white transition-transform duration-300 transform bg-primary-600 rounded-md hover:bg-primary-700 hover:shadow-lg">View
                All</a>
        </div>
    </section>

    <section class="">
        <x-partials.frontend.advantages-brand />
    </section>

    <section class="bg-primary-600 py-16">
        <div class="grid py-20 mx-auto md:grid-cols-2 max-w-7xl">
            <div class="pl-10 mb-8 space-y-10 text-white text-balance">
                <h1 class="text-4xl font-extrabold font-sans">Informasi Acara</h1>
                <p class="w-3/4 font-sans">
                    Discover the latest and most comprehensive information about exciting events at Sulawesi Tengah tourist 
                    attractions. Find various fun events that match your interests and get complete information about 
                    each event. Don't miss the opportunity to enjoy various exciting events at Sulawesi Tengah tourist attractions.
                    Make your vacation moments in Central Sulawesi even more memorable by participating in various fun events available.
                </p>
                <div class="mt-6">
                    <a href="{{ route('events') }}"
                        class="px-6 py-3 transition-transform duration-300 transform bg-white text-primary-600 rounded-md font-sans hover:bg-gray-100 hover:shadow-lg">View
                        All</a>
                </div>
            </div>
            <div class="overflow-x-auto text-center no-scrollbar">
                <div class="">
                    <div class="inline-flex items-center justify-center gap-10 py-4">
                        @forelse ($events as $event)
                            <x-partials.frontend.card-event :event="$event" />
                        @empty
                            <p class="text-xl font-semibold text-center text-white">No events available</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="relative px-3 md:px-0 mt-29 py-16">
        <div class="mb-8 text-4xl font-extrabold text-center">
            <h1 class="font-sans">Informasi Travel & Tips</h1>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4 py-4">
            @forelse ($articles as $article)
                <div class="opacity-0 image-container">
                    <x-partials.frontend.card-article :$article />
                </div>
            @empty
                <p class="text-xl font-semibold text-center text-gray-600">Belum ada Artikel yang tersedia</p>
            @endforelse
        </div>
        <div class="mt-6 text-center">
            <a href="{{ route('articles') }}"
                class="px-6 py-3 text-white transition-transform duration-300 transform bg-primary-600 rounded-md hover:bg-primary-700 hover:shadow-lg">View
                All</a>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);

            // Create animation for elements with .image-container class
            gsap.utils.toArray('.image-container').forEach(container => {
                gsap.to(container, {
                    scrollTrigger: {
                        trigger: container,
                        start: 'top 80%', // Start animation when element is 80% from the top of viewport
                        end: 'top 30%', // End animation when element is 30% from the top of viewport
                        toggleActions: 'play none none reverse', // Animation will reverse when scrolling up
                    },
                    opacity: 1,
                    y: 0,
                    duration: 1
                });
            })
        });
    </script>
</x-Layouts.visitor-layout>
