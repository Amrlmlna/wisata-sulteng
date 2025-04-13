<x-layouts.visitor-layout>
    <x-slot:title>Article Details | </x-slot:title>

    @push('style')
        <style>
            .reset h1 {
                font-size: 2em;
                padding-bottom: 10px;
                margin-bottom: 5px;
            }

            .reset h2 {
                font-size: 1.75em;
                padding-bottom: 8px;
                margin-bottom: 4px;
            }

            .reset h3 {
                font-size: 1.5em;
                margin-bottom: 3px;
            }

            .reset p {
                line-height: 1.6;
                padding: 8px 0px 8px 0px;
            }

            .reset ul,
            .reset ol {
                padding: 0;
                margin-left: 40px;
            }

            .reset ul {
                list-style: disc;
            }

            .reset ol {
                list-style: auto;
            }

            .reset ul li,
            .reset ol li {
                padding: 8px 10px 8px 10px;
            }

            .reset ol {
                counter-reset: custom-counter;
            }

            .reset ol li {
                counter-increment: custom-counter;
            }

            .reset blockquote {
                border-left: 5px solid #959595;
                margin: 20px 0 20px 25px;
                padding: 10px 20px;
                font-style: italic;
                background-color: #f9f9f9;
                color: #262525;
            }
        </style>
    @endpush

    <section class="pt-20 font-sans">
        <div class="relative z-10 max-w-screen-xl px-4 py-8 mx-auto">
            <a href="{{ Storage::url($article->image_url) }}" class="block overflow-hidden rounded-xl">
                <img class="object-cover w-full rounded-xl md:h-125 transition-transform duration-500 hover:scale-105" 
                    src="{{ Storage::url($article->image_url) }}" alt="{{ $article->title }}">
            </a>
        </div>
        <div class="relative z-20 h-auto max-w-screen-md px-10 mx-auto bg-white rounded-xl xl:max-w-screen-lg md:py-10 md:-mt-25 shadow-xl">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="text-4xl font-bold leading-normal md:text-4xl text-pretty">{{ $article->title }}</h1>
                <div class="flex flex-col gap-1 my-4">
                    <div class="flex flex-col md:flex-row md:gap-4">
                        <p>Written by <span class="font-semibold"> {{ $article->user->name }} </span></p>
                        <p class="inline-flex items-center gap-1 text-sm">
                            <svg class="w-5 h-5 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            {{ number_format($article->views) }} dilihat
                        </p>
                    </div>
                    <p class="text-secondary-600">
                        {{ \Carbon\Carbon::parse($article->created_at)->locale('id')->translatedFormat('l, j F Y') }}
                    </p>
                </div>
                <div class="reset">
                    {!! $article->content !!}
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
</x-layouts.visitor-layout>
