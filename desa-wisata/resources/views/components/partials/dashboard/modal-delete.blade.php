<div>
    <div id="deleteModal" tabindex="-1" class="fixed inset-0 z-50 items-center justify-center hidden">
        <div
            class="bg-white dark:bg-black rounded-lg space-y-4 shadow-2xl dark:shadow-gray-500 dark:shadow-md border p-6">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-red-500">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
            </div>
            <h2 class="mb-4 text-xl dark:text-white font-semibold text-center">Confirm Delete</h2>
            <p class="mb-5 dark:text-white text-center">Are you sure you want to delete this {{ $title }}?</p>
            <form id="deleteForm" method="post">
                @method('delete')
                @csrf
                <div class="flex justify-end gap-3">
                    <button type="button" class="px-4 py-2 text-white bg-gray-500 rounded hover:bg-gray-600 transition-colors"
                        onclick="closeModal()">Cancel</button>
                    <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 transition-colors">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        $('#deleteModal').addClass('hidden');
    }
</script>
