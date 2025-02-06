<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased bg-white dark:bg-black dark:text-gray-400">
        <div class="container mx-auto sm:px-6 lg:px-8">
            @include('_layouts.nav')
        </div>
        <div class="container mx-auto sm:px-6 lg:px-8 mt-6 text-gray-900 dark:text-gray-100 ">
            <div class="text-balance text-3xl font-semibold tracking-tight sm:text-4xl text-center">
                Story maker &gt; Toward desirable futures
            </div>
            <div class="text-balance text-2xl tracking-tight sm:text-3xl text-center">
                Thomas di Luccio
            </div>
        </div>
        <div class="container mx-auto sm:px-6 lg:px-8">
            @yield('body')
        </div>

        <footer class="">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-10 sm:py-14 lg:px-8">
                <p class="mt-10 text-center text-sm/6 text-gray-400 dark:text-gray-600">&copy; 2019 - {{ date('Y')}} Thomas di Luccio. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
