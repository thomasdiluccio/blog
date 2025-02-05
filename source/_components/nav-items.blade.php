@for ($i = $from; $i <= $to; $i++)
    <x-nav-item
        baseUrl="{{ $baseUrl}}"
        page={{ $i }}
        current={{ $current }}
    />
@endfor