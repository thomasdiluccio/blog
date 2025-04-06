<{{ '?xml' }} version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>{{ $page->title }}</title>
        <description>{{ $page->description }}</description>
        <lastBuildDate>{{ date('D, d M Y H:i:s O') }}</lastBuildDate>
        <link>{{ $page->baseUrl }}</link>
        <atom:link href="{{ $page->baseUrl }}/rss" rel="self" type="application/rss+xml" />
        @foreach ($posts as $post)
            <item>
                <title>{{ $post->title }}</title>
                <description>{{ $post->excerpt }}</description>
                <pubDate>{{ date('D, d M Y H:i:s O', $post->date) }}</pubDate>
                <link>{{ $post->getUrl() }}</link>
                <guid>{{ $post->getUrl() }}</guid>
            </item>
    @endforeach
    </channel>
</rss>