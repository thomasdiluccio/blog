<a 
    href="{{ $baseUrl }}/{{ $page }}/"
    @class([
    'inline-flex',
    'items-center',
    'border-t-2',
    'border-transparent',
    'border-indigo-500' => $page == $current,
    'px-4',
    'pt-4',
    'text-sm',
    'font-medium',
    'text-gray-500',
    'text-indigo-500' => $page == $current,
    'hover:border-gray-300' => $page != $current,
    'hover:text-gray-700' => $page != $current,
])>{{ $page }}</a>