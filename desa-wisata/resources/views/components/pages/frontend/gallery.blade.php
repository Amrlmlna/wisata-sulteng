<x-layouts.visitor-layout>
    <x-slot:title>Gallery | </x-slot:title>

    <div class="pt-30 px-7">
        <div class="">
            <h1 class="mb-10 text-3xl font-extrabold text-center md:text-4xl font-sans">Photo Gallery</h1>
        </div>
        <div class="grid grid-cols-1 gap-4 mx-auto md:grid-cols-4 max-w-7xl">
            @forelse ($galleries as $gallery)
                <div data-aos="zoom-in" data-aos-duration="1000" class="transition-all duration-300 hover:shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ Storage::url($gallery->image_url) }}" target="_blank" class="block relative group">
                        <img class="object-cover max-w-full aspect-square w-full transform transition-transform duration-500 group-hover:scale-105"
                            src="{{ Storage::url($gallery->image_url) }}" title="{{ $gallery->destination->name }}"
                            alt="Image of {{ $gallery->destination->name }}">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">
                                {{ $gallery->destination->name }}
                            </span>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-lg text-center text-gray-500 font-sans col-span-full">Belum ada Galeri gambar yang tersedia</p>
            @endforelse
        </div>
        @if ($galleries->lastPage() > 1)
            <div class="mt-10">
                {{ $galleries->links() }}
            </div>
        @endif
    </div>
</x-layouts.visitor-layout>

<script>
    AOS.init();
</script>
