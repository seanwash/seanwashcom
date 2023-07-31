@php
    use App\Data\SeoData;
    use App\Data\BookmarkData;
    use App\Content\Bookmarks;

    $seo = new SeoData(Bookmarks::$title, Bookmarks::$description);
    $bookmarks = BookmarkData::collection(Bookmarks::items());
@endphp

<x-layout :seo="$seo">
    <header>
        <h1 class="mb-0">{{ $seo->title }}</h1>
        <p>{{ $seo->description }}</p>
    </header>

    <ul>
        @foreach($bookmarks as $bookmark)
            <li>
                <header>
                    <a
                        href="{{ $bookmark->url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >{{ $bookmark->name }}</a>

                    <span class="inline-block ml-1 text-xs py-1 px-2 rounded-full bg-neutral-100 dark:bg-neutral-700">
                        {{ $bookmark->type }}
                    </span>
                </header>

                <p>{!! $bookmark->description !!}</p>
            </li>
        @endforeach
    </ul>
</x-layout>
