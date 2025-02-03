@extends('_layouts.main')

@section('body')
<div class="px-6 py-32 lg:px-8 blog blog-single">
    @include('_partials.featuredImage')
    <div class="mx-auto max-w-3xl text-base/7 text-gray-700 dark:text-gray-200">
        <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl">{{ $page->title }}</h1>
        <p class="text-base/7 font-semibold text-indigo-500">{{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>
        <div class="content">
            @if ($page->vimeo)
                <div
                    class="mt-10"
                    style="padding:56.25% 0 0 0;position:relative;"
                >
                    <iframe
                        src="https://player.vimeo.com/video/{{ $page->vimeo }}?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                        frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;"
                    ></iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            @endif
            @yield('content')
        </div>
    </div>
</div>

@endsection