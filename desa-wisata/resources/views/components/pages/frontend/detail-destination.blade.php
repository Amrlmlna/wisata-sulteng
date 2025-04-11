<x-layouts.visitor-layout>
    <x-slot:title>Attraction Details | </x-slot:title>

    <div class="grid gap-5 px-4 mx-auto max-w-7xl md:grid-cols-2 md:px-6 pt-35 font-sans">
        <div class="">
            <div class="grid gap-4">
                <div>
                    <img class="object-cover object-center w-full h-auto max-w-full rounded-lg aspect-[4/3]"
                        id="expandedImg" src="{{ Storage::url($destination->galleries[0]->image_url) }}" alt="{{ $destination->name }}">
                </div>
                <div class="overflow-x-auto">
                    <div class="inline-flex gap-3 h-15">
                        @foreach ($destination->galleries as $gallery)
                            <img class="h-auto max-w-full cursor-pointer object-cover object-center rounded-lg aspect-[4/3] imgClick hover:opacity-80 transition-opacity"
                                src="{{ Storage::url($gallery->image_url) }}" alt="{{ $destination->name }} gallery image">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="space-y-5">
                <div class="space-y-2">
                    <h1 class="text-2xl font-bold md:text-3xl">{{ $destination->name }}</h1>
                    <span class="flex items-center text-sm text-secondary-600 gap-1">
                        <svg class="w-5 h-5 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        {{ number_format($destination->views) }} views
                    </span>
                    <div>
                        <label class="block text-sm font-medium text-secondary-700 mb-1">Location:</label>
                        <div class="flex gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <a href="{{ $destination->gmaps_url }}" target="_blank" class="text-primary-600 hover:underline">
                                <address class="text-sm capitalize lg:text-base not-italic">
                                    {{ $destination->location }}
                                </address>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-secondary-700 mb-1">Description:</label>
                    <p class="text-secondary-600 md:text-lg leading-relaxed">{{ $destination->description }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-secondary-700 mb-1">Price Range:</label>
                    <h1 class="pb-4 font-bold md:text-2xl text-primary-600">
                        {{ $destination->price_range == 0 ? 'Free Entry' : 'Starting from Rp. ' . number_format($destination->price_range) }}
                    </h1>
                </div>
            </div>
            <div class="">
                <div class="mb-4 border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                        data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Operating Hours</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-primary-600 hover:border-primary-300"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Facilities</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-primary-600 hover:border-primary-300"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Accommodations</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-primary-600 hover:border-primary-300"
                                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-secondary-50" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <p class="capitalize">
                            {{ $openingHours[0] . '-' . $openingHours[1] . ', ' . date('H:i', strtotime($openingHours[2])) . '-' . date('H:i', strtotime($openingHours[3])) . ' WIB' }}
                        </p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-secondary-50" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        <ul class="list-disc pl-5 space-y-2">
                            @forelse ($destination->facilities as $facility)
                                <li>{{ $facility->name }}</li>
                            @empty
                                <p>No facilities available yet</p>
                            @endforelse
                        </ul>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-secondary-50" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">
                        <ul class="list-disc pl-5 space-y-2">
                            @forelse ($destination->accommodations as $accommodation)
                                <li>{{ $accommodation->name }}</li>
                            @empty
                                <p>No accommodations available yet</p>
                            @endforelse
                        </ul>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-secondary-50" id="contacts" role="tabpanel"
                        aria-labelledby="contacts-tab">
                        @if ($destination->contactDetail->phone)
                            <div class="flex gap-2 items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                {{ $destination->contactDetail->phone }}
                            </div>
                        @endif

                        @if ($destination->contactDetail->email)
                            <div class="flex gap-2 items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                {{ $destination->contactDetail->email }}
                            </div>
                        @endif

                        @if ($destination->contactDetail->social_media)
                            <div class="flex gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                                <a href="{{ $destination->contactDetail->social_media }}" class="text-primary-600 hover:underline">Visit social media</a>
                            </div>
                        @endif
                    </div>
                </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const expandedImg = document.getElementById('expandedImg');
            const imgClick = document.querySelectorAll('.imgClick');

            imgClick.forEach(function(element) {
                element.addEventListener('click', function() {
                    expandedImg.src = this.src;
                    // Add smooth transition
                    expandedImg.classList.add('opacity-0');
                    setTimeout(() => {
                        expandedImg.classList.remove('opacity-0');
                    }, 100);
                });
            });
        })

        // Text Elipsis via javascript
        function shortenText(elementSelector, maxLength, elipsis) {
            let elements = document.querySelectorAll(elementSelector);

            elements.forEach(function(element) {
                let textContent = element.textContent.trim();

                if (textContent.length > maxLength) {
                    if (elipsis) {
                        let shortenedContent =
                            textContent.substring(0, maxLength) + " ...";
                        element.textContent = shortenedContent;
                    } else {
                        let shortenedContent = textContent.substring(0, maxLength);
                        element.textContent = shortenedContent;
                    }
                }
            });
        }

        shortenText(".elipsis", 450, true);
    </script>
</x-layouts.visitor-layout>
