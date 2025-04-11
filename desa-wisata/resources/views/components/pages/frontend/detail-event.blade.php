<x-layouts.visitor-layout>
    <x-slot:title>Event Details | </x-slot:title>

    <div class="flex flex-col min-h-[100dvh] pt-30">
        <section class="w-full py-28 bg-primary-600 font-sans">
            <div class="px-4 mx-auto max-w-7xl md:px-6">
                <div class="grid gap-6 lg:grid-cols-[1fr_400px] lg:gap-12 xl:grid-cols-[1fr_600px]">
                    <div class="flex flex-col justify-center space-y-4">
                        <div class="text-white">
                            <h1 class="text-3xl font-bold tracking-tighter text-white sm:text-5xl xl:text-6xl/none">
                                {{ $event->name }}</h1>
                        </div>
                    </div>
                    <div class="p-6 space-y-4 bg-white rounded-lg shadow-lg">
                        <div class="flex gap-6">
                            <span>
                                {!! $status !!}
                            </span>
                            <span class="flex items-center text-sm text-secondary-600 gap-1">
                                <svg class="w-5 h-5 text-secondary-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                {{ number_format($event->views) }} views
                            </span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Date &amp; Time</h3>
                            @php
                                $start_date = \Carbon\Carbon::parse($event->start_date)->locale('id');
                                $end_date = \Carbon\Carbon::parse($event->end_date)->locale('id');
                            @endphp
                            <p class="text-secondary-600">
                                {{ $start_date->translatedFormat('l, H:i j F Y') . ' - ' . $end_date->translatedFormat('l, H:i j F Y') }}
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Location</h3>
                            <a href="{{ $event->gmaps_url }}" class="text-primary-600 hover:underline">{{ $event->location }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full py-10">
            <div class="container px-4 mx-auto max-w-7xl md:px-6">
                <div class="grid gap-10">
                    <a href="{{ Storage::url($event->image_url) }}" target="_blank" class="overflow-hidden rounded-xl">
                        <img src="{{ Storage::url($event->image_url) }}"
                            class="w-full rounded-xl h-[500px] object-cover transition-transform hover:scale-105 duration-300" alt="{{ $event->name }}">
                    </a>
                    <div>
                        <h2 class="mb-6 text-3xl font-bold tracking-tighter">About This Event</h2>
                        <p class="mb-6 text-secondary-600 leading-relaxed">{{ $event->description }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 mt-6">
                    <a href="{{ url()->previous() }}" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back
                    </a>
                </div>
            </div>
        </section>
    </div>
</x-layouts.visitor-layout>
