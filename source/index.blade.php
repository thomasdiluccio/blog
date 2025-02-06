---
pagination:
  collection: posts
---

@extends('_layouts.main')

@section('body')
<div class="p-8">
    @foreach ($pagination->items as $post)
        @if ($loop->first && $pagination->currentPage == 1)
            <div class="mx-auto mt-16 grid max-w-3xl grid-cols-1">
                @include('_partials.excerpt', ['thumbnailSize' => 800])
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @elseif ($loop->first && $pagination->currentPage != 1)
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @include('_partials.excerpt', ['thumbnailSize' => 450])
        @else
            @include('_partials.excerpt', ['thumbnailSize' => 450])
        @endif
    @endforeach
    </div>
</div>
@include('_partials.pagination')
@endsection
