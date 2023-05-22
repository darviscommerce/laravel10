@if (count(config('manta-cms.locales')) > 1)
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link {{ config('manta-cms.locale') == $locale ? 'active' : null }}" aria-current="page"
                href="{{ route('manta.houses.update', ['input' => $item->translation()['org']->id]) }}">{{ config('manta-cms.locales')[config('manta-cms.locale')]['language'] }}
                <span class="{{ config('manta-cms.locales')[config('manta-cms.locale')]['css'] }}"></span></a>
        </li>
        @foreach (config('manta-cms.locales') as $key => $value)
            @if ($key != config('manta-cms.locale'))
                <li class="nav-item">
                    <a class="nav-link {{ $key == $locale ? 'active' : null }}"
                        href="{{ route('manta.houses.update', ['locale' => $key, 'input' => $item->translation()['org']->id]) }}">{{ $value['language'] }}
                        <span class="{{ $value['css'] }}"></span></a>
                </li>
            @endif
        @endforeach
        {{-- <li class="nav-item">
        <a class="nav-link {{ isset($plugin) && $plugin == 'uploads' ? 'active' : null }}"
            href="{{ route('manta.houses.uploads', ['input' => $item->id]) }}">Uploads</a>
    </li> --}}
    </ul>
@endif

<p>
<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{ isset($view) && $view == 'general' ? 'active' : null }}"
            href="{{ route('manta.houses.update', ['locale' => $item->locale, 'input' => $item->id]) }}">Algemeen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ isset($view) && $view == 'tags' ? 'active' : null }}"
            href="{{ route('manta.houses.tags', ['locale' => $item->locale, 'input' => $item->id]) }}">Tags</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ isset($view) && $view == 'details' ? 'active' : null }}"
            href="{{ route('manta.houses.details', ['locale' => $item->locale, 'input' => $item->id]) }}">Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ isset($view) && $view == 'uploads' ? 'active' : null }}"
            href="{{ route('manta.houses.headers', ['locale' => $item->locale, 'input' => $item->id]) }}">Header</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ isset($view) && $view == 'uploads' ? 'active' : null }}"
            href="{{ route('manta.houses.photos', ['locale' => $item->locale, 'input' => $item->id]) }}">Fotos</a>
    </li>
</ul>
</p>
