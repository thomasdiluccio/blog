<header class="main-header">
  <nav class="z-20 relative mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="/" class="-m-1.5 p-1.5">
        <span class="sr-only">ME</span>
        <img class="h-8 w-auto" src="/assets/images/logo.svg" alt="">
      </a>
      <input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check" class="burger text-black dark:text-white sm:hidden"></label>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="/" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Home</a>
      <a href="/about/" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">About</a>
      <a href="/assets/Thomas-di-luccio_product-advocacy-leader.pdf" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Resume</a>
      <a href="https://www.linkedin.com/in/thomasdiluccio/" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Contact</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end social-networks">
      <a href="https://bsky.app/profile/thomas.diluccio.fr">
        <img src="/assets/images/bluesky.svg" alt="Bluesky" class="inline-block w-4 mx-2" />
      </a>
      <a href="https://www.linkedin.com/in/thomasdiluccio/">
          <img src="/assets/images/linkedin.svg" alt="LinkedIn" class="inline-block w-4 mx-2" />
      </a>
      <a href="{{ $page->baseUrl }}/rss">
          <img src="/assets/images/rss.svg" alt="RSS Feed" class="inline-block w-4 mx-2" />
      </a>
    </div>
  </nav>

  <!-- Mobile menu, show/hide based on menu open state. -->
  <nav class="hidden relative z-10 mobile-navigation" id="mobile-navigation" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto  px-6 py-6 pt-10 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-black">
      {{-- <div class="flex items-center justify-between">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">ME</span>
          <img class="h-8 w-auto" src="/assets/images/logo.svg" alt="">
        </a>
      </div> --}}
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">Home</a>
            <a href="/about/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">About</a>
            <a href="/assets/Thomas-di-luccio_product-advocacy-leader.pdf" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">Resume</a>
            <a href="https://www.linkedin.com/in/thomasdiluccio/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">Contact</a>
          </div>
          <div class="py-6">
            <a href="https://bsky.app/profile/thomas.diluccio.fr" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">
              <img src="/assets/images/bluesky.svg" alt="Bluesky" class="inline-block w-4 mx-2"/> Bluesky
            </a>
            <a href="https://www.linkedin.com/in/thomasdiluccio/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">
              <img src="/assets/images/linkedin.svg" alt="LinkedIn" class="inline-block w-4 mx-2" /> LinkedIn
            </a>
            <a href="{{ $page->baseUrl }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:text-black">
              <img src="/assets/images/rss.svg" alt="RSS Feed" class="inline-block w-4 mx-2" /> RSS Feed
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
