<x-layouts.visitor-layout>
    <x-slot:title>Articles | </x-slot:title>

    <div class="pt-30 font-sans">
        <div class="text-4xl font-extrabold text-center mb-8">
            <h1 class="font-sans">Travel Articles</h1>
        </div>

        <div class="">
            <form class="max-w-md px-10 mx-auto my-10" action="{{ route('articles') }}" method="GET">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" name="keyword" id="default-search"
                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search articles..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>
        </div>
        <div class="grid gap-6 px-3 mx-auto mt-10 xl:grid-cols-4 lg:grid-cols-3 max-w-7xl justify-items-center">
            @forelse ($articles as $article)
                <div class="transform transition-all duration-300 hover:-translate-y-2">
                    <x-partials.frontend.card-article :article="$article" />
                </div>
            @empty
                <p class="text-xl font-semibold text-center text-gray-600 col-span-full">No articles available</p>
            @endforelse
        </div>
    </div>

    @if ($articles->lastPage() > 1)
        <div class="px-5 mx-auto mt-10 max-w-7xl">
            {{ $articles->links() }}
        </div>
    @endif

</x-layouts.visitor-layout>


<script>
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

    shortenText(".paragraph", 500, true);
    shortenText(".title", 50, true);
</script>
