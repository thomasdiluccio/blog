@extends('_layouts.main')

@section('body')
<div class="p-8">
    @foreach ($posts as $post)
        @if ($loop->first)
            <div class="mx-auto mt-16 grid max-w-3xl grid-cols-1">
                @include('_partials.excerpt')
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @else
            @include('_partials.excerpt')
        @endif
    @endforeach
    </div>
</div>
@endsection
