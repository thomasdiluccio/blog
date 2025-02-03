
    <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl ">
        @if ($post->featuredImage)
            <div class="relative w-full">
                <a href="{{ $post->getUrl() }}">
                    <img src="{{ $post->featuredImage }}"
                        alt="" class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    </a>
            </div>
        @endif
        <div class="max-w-xl">
            <div class="mt-8 flex items-center gap-x-4 text-xs">
                <time datetime="{{ date('Y-m-d', $post->date) }}" class="text-gray-500 dark:text-gray-200">
                    {{ date('j F Y', $post->date) }}
                </time>
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 dark:text-gray-100 group-hover:text-indigo-500">
                    <a href="{{ $post->getUrl() }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600 dark:text-gray-300">
                    {{ $post->excerpt }}
                </p>
                @yield('content')
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                <img src="/assets/images/tdl.jpg" alt="" class="size-10 rounded-full bg-gray-100">
                <div class="text-sm/6">
                    <p class="font-semibold text-gray-900 dark:text-gray-100">
                        <span class="absolute inset-0"></span>
                        {{ $post->author }}
                    </p>
                    <p class="text-gray-600 dark:text-gray-300">{{ $post->authorTagline }}</p>
                </div>
            </div>
        </div>
    </article>