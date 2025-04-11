<div class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
    <a href="{{ route('events.show', $event->slug) }}" class="block relative overflow-hidden group">
        <img class="rounded-t-lg w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
            src="{{ Storage::url($event->image_url) }}" alt="{{ $event->name }}" />
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
            <h3 class="text-white font-bold text-xl mb-2 elips">{{ $event->name }}</h3>
            <p class="text-white/90 text-sm mb-3 elipsis">{{ $event->description }}</p>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-100 text-primary-800 w-fit">
                View Details
            </span>
        </div>
    </a>
    <div class="p-5">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 elips">{{ $event->name }}</h5>
        <div class="flex items-center mb-3">
            <svg class="w-4 h-4 text-primary-600 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            @php
                $start_date = \Carbon\Carbon::parse($event->start_date)->locale('id');
            @endphp
            <p class="text-sm text-gray-600">{{ $start_date->translatedFormat('j F Y') }}</p>
        </div>
        <p class="mb-3 font-normal text-gray-700 line-clamp-2 elipsis">{{ $event->description }}</p>
        <a href="{{ route('events.show', $event->slug) }}" 
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300">
            View Details
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

<script>
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

    shortenText(".elipsis", 100, true);
    shortenText(".elips", 20, true);
</script>
