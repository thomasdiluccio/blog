<nav class="flex items-center justify-between border-t border-gray-200 dark:border-gray-800 px-4 sm:px-0 mt-4">
        <div class="-mt-px flex w-0 flex-1">
            @if ($previous = $pagination->previous)
                <x-nav-previous baseUrl="{{ $page->baseUrl }}" previous="{{ $previous }}" />
            @else
                &nbsp;
            @endif
        </div>
    <div class="hidden md:-mt-px md:flex">
        @if ($pagination->totalPages <= 6)
            <x-nav-items
                baseUrl="{{ $page->baseUrl }}"
                from=1
                to={{ $pagination->totalPages }}
                current={{ $pagination->currentPage }}
            />
        @endif

        {{-- <span
            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">...</span> --}}

    </div>
    <div class="-mt-px flex w-0 flex-1 justify-end">
        @if ($next = $pagination->next)
            <x-nav-next baseUrl="{{ $page->baseUrl }}" next="{{ $next }}" />
        @else
            &nbsp;
        @endif
    </div>
</nav>