<a 
    href="{{ $baseUrl }}/{{ $page }}/"
    @class([
    'inline-flex',
    'items-center',
    'border-t-2',
    'border-transparent',
    'border-indigo-700' => $page == $current,
    'dark:border-indigo-700' => $page == $current,
    'px-4',
    'pt-4',
    'text-sm',
    'font-medium',
    'text-gray-700',
    'dark:text-gray-300',
    'text-indigo-700' => $page == $current,
    'dark:text-indigo-300' => $page == $current,
    'hover:border-gray-300' => $page != $current,
    'hover:text-gray-700' => $page != $current,
])>{{ $page }}</a>