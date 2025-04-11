<x-layouts.dashboard>

    @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'admin')
        <div class="">
            <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-4 justify-items-center">
                <div class="bg-white p-6 w-full max-w-[250px] space-y-2 text-center rounded-lg shadow-md border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                            class="text-primary-600">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $totalDestination }}</h1>
                    <p class="text-lg text-gray-600">Total Destinations</p>
                </div>
                <div class="bg-white p-6 w-full max-w-[250px] space-y-2 text-center rounded-lg shadow-md border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                            class="text-primary-600">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $totalUser }}</h1>
                    <p class="text-lg text-gray-600">Total Users</p>
                </div>
                <div class="bg-white p-6 w-full max-w-[250px] space-y-2 text-center rounded-lg shadow-md border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                            class="text-primary-600">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $totalEvent }}</h1>
                    <p class="text-lg text-gray-600">Total Events</p>
                </div>

                <div class="bg-white p-6 w-full max-w-[250px] space-y-2 text-center rounded-lg shadow-md border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                            class="text-primary-600">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $totalArticle }}</h1>
                    <p class="text-lg text-gray-600">Total Articles</p>
                </div>
            </div>
            <div class="mt-6 w-full">
                {{-- <canvas id="myChart" class="w-full"></canvas> --}}
            </div>
        </div>
    @endif

    @if (auth()->user()->role == 'owner')
        <div class="bg-white p-6 w-full space-y-2 text-center rounded-lg shadow-md border border-gray-100">
            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="text-primary-600">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-800">{{ $totalDestination }}</h1>
            <p class="text-lg text-gray-600">Total Destinations</p>
        </div>
    @endif
    
    @if (auth()->user()->role == 'writer')
        <div class="bg-white p-6 w-full space-y-2 text-center rounded-lg shadow-md border border-gray-100">
            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="text-primary-600">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-800">{{ $totalArticle }}</h1>
            <p class="text-lg text-gray-600">Total Articles</p>
        </div>
    @endif


    @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'admin')
        <div class="mt-8">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100">
                    <h2 class="text-lg font-semibold mb-4 text-gray-800">Popular Articles</h2>
                    <canvas id="chartArticle"></canvas>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100">
                    <h2 class="text-lg font-semibold mb-4 text-gray-800">Popular Destinations</h2>
                    <canvas id="chartDestination"></canvas>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 mt-6">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Popular Events</h2>
                <canvas id="chartEvent"></canvas>
            </div>
        </div>
    @endif

    @if (auth()->user()->role == 'writer')
        <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 mt-8">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Popular Articles</h2>
            <canvas id="chartArticle"></canvas>
        </div>
    @endif

    @if (auth()->user()->role == 'owner')
        <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 mt-8">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Popular Destinations</h2>
            <canvas id="chartDestination"></canvas>
        </div>
    @endif


</x-layouts.dashboard>


@if (auth()->user()->role !== 'owner')
    <script>
        var ctx = document.getElementById('chartArticle').getContext('2d');
        var articleLabels = @json($dataArticle['articleLabels']);

        // Truncate labels if too long
        var shortLabels = articleLabels.map(function(label) {
            return label.length > 10 ? label.substr(0, 6) + '...' : label;
        });

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: shortLabels,
                datasets: [{
                    label: 'Top 5 Popular Articles',
                    data: @json($dataArticle['articleData']),
                    backgroundColor: 'rgba(14, 165, 233, 0.2)',
                    borderColor: 'rgba(14, 165, 233, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(tooltipItems) {
                                // Show original label in tooltip
                                var index = tooltipItems[0].dataIndex;
                                return articleLabels[index];
                            }
                        }
                    }
                }
            }
        });
    </script>
@endif

@if (auth()->user()->role !== 'writer')
    <script>
        var ctx = document.getElementById('chartDestination').getContext('2d');
        var destinationLabels = @json($dataDestination['destinationLabels']);

        // Truncate labels if too long
        var shortLabels = destinationLabels.map(function(label) {
            return label.length > 10 ? label.substr(0, 6) + '...' : label;
        });

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: shortLabels,
                datasets: [{
                    label: 'Top 5 Popular Destinations',
                    data: @json($dataDestination['destinationData']),
                    backgroundColor: 'rgba(14, 165, 233, 0.2)',
                    borderColor: 'rgba(14, 165, 233, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(tooltipItems) {
                                // Show original label in tooltip
                                var index = tooltipItems[0].dataIndex;
                                return destinationLabels[index];
                            }
                        }
                    }
                }
            }
        });
    </script>
@endif


@if (auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin')
    <script>
        var ctx = document.getElementById('chartEvent').getContext('2d');
        var eventLabels = @json($dataEvent['eventLabels']);

        // Truncate labels if too long
        var shortLabels = eventLabels.map(function(label) {
            return label.length > 10 ? label.substr(0, 6) + '...' : label;
        });

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: shortLabels,
                datasets: [{
                    label: 'Top 5 Popular Events',
                    data: @json($dataEvent['eventData']),
                    backgroundColor: 'rgba(14, 165, 233, 0.2)',
                    borderColor: 'rgba(14, 165, 233, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(tooltipItems) {
                                // Show original label in tooltip
                                var index = tooltipItems[0].dataIndex;
                                return eventLabels[index];
                            }
                        }
                    }
                }
            }
        });
    </script>
@endif
