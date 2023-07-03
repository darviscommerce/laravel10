<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Evenementen</a></li>
            <li class="breadcrumb-item active" aria-current="page"><em>{!! $item->translation()['get']->title !!}</em> uploads</li>
        </ol>
    </nav>
    {{-- @if (count(config('manta-cms.locales')) > 1)
        <ul class="mb-4 nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{ !isset($plugin) && config('manta-cms.locale') == $locale ? 'active' : null }}"
                    aria-current="page"
                    href="{{ route('manta.event.update', ['input' => $item->translation()['org']->id]) }}">{{ config('manta-cms.locales')[config('manta-cms.locale')]['language'] }}
                    <span class="{{ config('manta-cms.locales')[config('manta-cms.locale')]['css'] }}"></span></a>
            </li>
            @foreach (config('manta-cms.locales') as $key => $value)
                @if ($key != config('manta-cms.locale'))
                    <li class="nav-item">
                        <a class="nav-link {{ $key == $locale ? 'active' : null }}"
                            href="{{ route('manta.event.update', ['locale' => $key, 'input' => $item->id]) }}">{{ $value['language'] }}
                            <span class="{{ $value['css'] }}"></span></a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif --}}
    <ul class="mt-4 mb-4 nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ $show == 'general' ? 'active' : null }}" aria-current="page"
                href="{{ route('manta.event.update', ['input' => $item->id, 'show' => 'general']) }}">Basis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $show == 'date' ? 'active' : null }}"
                href="{{ route('manta.event.update', ['input' => $item->id, 'show' => 'date']) }}">Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $show == 'location' ? 'active' : null }}"
                href="{{ route('manta.event.update', ['input' => $item->id, 'show' => 'location']) }}">Locatie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ isset($plugin) && $plugin == 'uploads' ? 'active' : null }}"
                href="{{ route('manta.event.uploads', ['input' => $item->id]) }}">Uploads</a>
        </li>
    </ul>
    @livewire('uploads.uploads-upload')
</div>
