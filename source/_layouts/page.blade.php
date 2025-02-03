@extends('_layouts.main')

@section('body')
<div class=" px-6 py-32 lg:px-8 blog blog-single">
    @include('_partials.featuredImage')
    <div class="mx-auto max-w-3xl text-base/7 text-gray-700 dark:text-gray-200">
        <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl">{{ $page->title }}</h1>
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

@endsection