@php
    use App\Data\SeoData;
    use App\Data\ToolData;
    use App\Content\Tools;

    $seo = new SeoData(Tools::title(), Tools::description());
    $tools = ToolData::collection(Tools::items());
@endphp

<x-layout :seo="$seo">
    <header>
        <h1 class="mb-0">{{ $seo->title }}</h1>
        <p>{{ $seo->description }}</p>
    </header>

    <ul>
        @foreach($tools as $tool)
            <li>
                <header>
                    <a
                        href="{{ $tool->url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >{{ $tool->name }}</a>

                    <span class="inline-block ml-1 text-xs py-1 px-2 rounded-full bg-neutral-100 dark:bg-neutral-700">
                            {{ $tool->price }}
                        </span>
                </header>

                <p>{!! $tool->description !!}</p>
            </li>
        @endforeach
    </ul>
</x-layout>
