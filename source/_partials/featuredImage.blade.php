@if ($page->featuredImage)
    <div class="relative w-full mb-10">
        <img src="{{ $page->featuredImage }}" alt=""
            class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

        @if ($page->featuredImageAlt)
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent">
                <p class="text-white text-sm">{{ $page->featuredImageAlt }}</p>
            </div>
        @endif
    </div>
@endif
