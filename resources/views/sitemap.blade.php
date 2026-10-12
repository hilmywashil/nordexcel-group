<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $page)
        <url>
            <loc>{{ $page['url'] }}</loc>
        </url>
    @endforeach

    @foreach ($articles as $article)
        <url>
            <loc>{{ route('artikel.detail', ['slug' => $article->slug]) }}</loc>
            <lastmod>{{ $article->updated_at->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>