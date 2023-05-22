<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.houses.list') }}">Huizen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toevoegen</li>
        </ol>
    </nav>

    @if (count(config('manta-cms.locales')) > 1 && $item)
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
          <a class="nav-link {{ $pid == null ? 'active' : null }}" aria-current="page" href="{{ route('manta.houses.update', ['input' => $pid]) }}">{{ config('manta-cms.locales')[config('manta-cms.locale')]['language'] }} <span class="{{ config('manta-cms.locales')[config('manta-cms.locale')]['css'] }}"></span></a>
        </li>
        @foreach (config('manta-cms.locales') as $key => $value)
            @if($key != config('manta-cms.locale'))
        <li class="nav-item">
          <a class="nav-link {{ $pid && $key == $locale ? 'active' : null }}" href="{{ route('manta.houses.update', ['locale' => $key, 'input' => $item->id]) }}">{{ $value['language'] }} <span class="{{ $value['css'] }}"></span></a>
        </li>
            @endif
        @endforeach
        {{-- <li class="nav-item">
            <a class="nav-link {{ isset($plugin) && $plugin == 'uploads' ? 'active' : null }}"
                href="{{ route('manta.houses.uploads', ['input' => $item->id]) }}">Uploads</a>
        </li> --}}
      </ul>
    @endif
    <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Titel</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('title')is-invalid @enderror"
                    id="title" wire:model="title">
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                <em>{!! $item->translation()['get']->title !!}</em>
                @endif
            </div>
        </div>


        <div class="mb-3 row">
            <div class="col-sm-12">
                {{-- @include('includes.form_error') --}}
                <input class="btn btn-sm btn-primary" type="submit" value="Opslaan" wire:loading.class="btn-secondary"
                    wire:loading.attr="disabled" />
            </div>
        </div>
    </form>
</div>
