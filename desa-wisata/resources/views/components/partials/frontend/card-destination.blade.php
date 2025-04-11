<div class="card max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
    <a href="{{ route('destinations.show', $destination->slug) }}" class="block relative overflow-hidden group">
        <img class="rounded-t-lg w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
            src="{{ Storage::url($destination->galleries[0]->image_url) }}" alt="{{ $destination->name }}" />
    </a>
    <div class="p-5">
        <div class="flex justify-between items-start mb-2">
            <h5 class="text-xl font-bold tracking-tight text-gray-900 title">{{ $destination->name }}</h5>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                {{ $destination->status === 'active' ? 'Open' : 'Closed' }}
            </span>
        </div>
        <div class="flex items-center mb-3">
            <svg class="w-4 h-4 text-primary-600 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                <path d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
            </svg>
            <p class="text-sm text-gray-600">{{ number_format($destination->views) }} views</p>
        </div>
        <p class="mb-3 font-normal text-gray-700 line-clamp-2 elipsis">{{ $destination->description }}</p>
        @if ($destination->status === 'active')
            <a href="{{ route('destinations.show', $destination->slug) }}" 
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300">
                View Details
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @else
            <button type="button" disabled
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-400 rounded-lg cursor-not-allowed">
                Attraction Closed
            </button>
        @endif
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

    shortenText(".title", 25, true);
    shortenText(".elipsis", 100, true);
</script>
