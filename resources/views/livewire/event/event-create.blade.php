<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Evenementen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toevoegen</li>
        </ol>
    </nav>
    @if ($locale != 'nl')
        <div class="alert alert-warning" role="alert">
            <i class="fa-solid fa-earth-europe"></i>
            <a href="javascript:;" class="text-black" wire:click="googleTranslateTags('{{ $locale }}')">Vertaal
                deze pagina</a>
        </div>
    @endif
    @if (count(config('manta-cms.locales')) > 1 && $item)
        <ul class="mb-4 nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{ $pid == null ? 'active' : null }}" aria-current="page"
                    href="{{ route('manta.event.update', ['input' => $pid]) }}">{{ config('manta-cms.locales')[config('manta-cms.locale')]['language'] }}
                    <span class="{{ config('manta-cms.locales')[config('manta-cms.locale')]['css'] }}"></span></a>
            </li>
            @foreach (config('manta-cms.locales') as $key => $value)
                @if ($key != config('manta-cms.locale'))
                    <li class="nav-item">
                        <a class="nav-link {{ $pid && $key == $locale ? 'active' : null }}"
                            href="{{ route('manta.event.update', ['locale' => $key, 'input' => $item->id]) }}">{{ $value['language'] }}
                            <span class="{{ $value['css'] }}"></span></a>
                    </li>
                @endif
            @endforeach
            {{-- <li class="nav-item">
            <a class="nav-link {{ isset($plugin) && $plugin == 'uploads' ? 'active' : null }}"
                href="{{ route('manta.event.uploads', ['input' => $item->id]) }}">Uploads</a>
        </li> --}}
        </ul>
    @endif
    <ul class="mt-4 mb-4 nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ $show == 'general' ? 'active' : null }}" aria-current="page"
                wire:click="$set('show','general')">Basis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $show == 'date' ? 'active' : null }}" href="javascript:;"
                wire:click="$set('show','date')">Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $show == 'location' ? 'active' : null }}" href="javascript:;"
                wire:click="$set('show','location')">Locatie</a>
        </li>
    </ul>
    <div {!! $show != 'general' ? 'style="display: none;"' : null !!}>
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Titel</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('title')is-invalid @enderror"
                    id="title" wire:model="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
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
            <label for="subtitle" class="col-sm-2 col-form-label">Subtitel</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('subtitle')is-invalid @enderror"
                    id="subtitle" wire:model="subtitle">
                @error('subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->subtitle !!}</em>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="slug" class="col-sm-2 col-form-label">Slug @if ($slug)
                    <a href="{{ url($slug) }}" target="_blank"><i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                @endif
            </label>
            <div class="col-sm-5">
                <input type="text" class="form-control form-control-sm @error('slug')is-invalid @enderror"
                    id="slug" wire:model.defer="slug">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->seo_title !!}</em>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="seo_title" class="col-sm-2 col-form-label">SEO Titel</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form-control-sm @error('seo_title')is-invalid @enderror"
                    id="seo_title" wire:model="seo_title">
                @error('seo_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->seo_title !!}</em>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="seo_description" class="col-sm-2 col-form-label">SEO Omschrijving</label>
            <div class="col-sm-5">
                <textarea class="form-control form-control-sm @error('seo_description')is-invalid @enderror" rows="4"
                    id="seo_description" wire:model="seo_description"></textarea>
                @error('seo_description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->seo_description !!}</em>
                @endif
            </div>
        </div>
        {{-- <div class="mb-3 row">
            <label for="tags" class="col-sm-2 col-form-label">Tags</label>
            <div class="col-sm-5">
                <textarea class="form-control form-control-sm @error('tags')is-invalid @enderror" id="tags" rows="7"
                    wire:model="tags" placeholder="Bijvoorbeeld: test,abc,doemaar"></textarea>
                @error('tags')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->tags !!}</em>
                @endif
            </div>
        </div> --}}
        <div class="mb-3 row">
            <label for="excerpt" class="col-sm-2 col-form-label">Excerpt/ inleiding</label>
            <div class="col-sm-5">
                <textarea class="form-control form-control-sm @error('excerpt')is-invalid @enderror" id="excerpt" rows="7"
                    wire:model="excerpt" placeholder="Schrijf hier een inleidende tekst"></textarea>
                @error('excerpt')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->excerpt !!}</em>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="content" class="col-sm-2 col-form-label">Bericht</label>
            <div class="col-sm-5" wire:ignore>
                <textarea class="form-control form-control-sm @error('content')is-invalid @enderror" id="content" rows="7"
                    wire:model="content" id="content"></textarea>
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->content !!}</em>
                @endif
            </div>
        </div>
        <x-manta.component-tinymce name="content" />
    </div>
    <div {!! $show != 'date' ? 'style="display: none;"' : null !!}>
        <div class="mb-3 row">
            <label for="from" class="col-sm-2 col-form-label">Van:</label>
            <div class="col-sm-4">
                <input type="datetime-local" class="form-control form-control-sm @error('from')is-invalid @enderror"
                    id="from" wire:model="from">
                @error('from')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="till" class="col-sm-2 col-form-label">Tot en met:</label>
            <div class="col-sm-4">
                <input type="datetime-local" class="form-control form-control-sm @error('till')is-invalid @enderror"
                    id="till" wire:model="till">
                @error('till')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fromPublish" class="col-sm-2 col-form-label">Tonen van:</label>
            <div class="col-sm-4">
                <input type="datetime-local"
                    class="form-control form-control-sm @error('fromPublish')is-invalid @enderror" id="fromPublish"
                    wire:model="fromPublish">
                @error('fromPublish')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="tillPublish" class="col-sm-2 col-form-label">Tonen tot en met:</label>
            <div class="col-sm-4">
                <input type="datetime-local"
                    class="form-control form-control-sm @error('tillPublish')is-invalid @enderror" id="tillPublish"
                    wire:model="tillPublish">
                @error('tillPublish')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div {!! $show != 'location' ? 'style="display: none;"' : null !!}>
        <div class="mb-3 row">
            <label for="address" class="col-sm-2 col-form-label">Adres</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('address')is-invalid @enderror"
                    id="address" wire:model="address">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="zipcode" class="col-sm-2 col-form-label">Postcode</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('zipcode')is-invalid @enderror"
                    id="zipcode" wire:model="zipcode">
                @error('zipcode')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="city" class="col-sm-2 col-form-label">Woonplaats</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('city')is-invalid @enderror"
                    id="city" wire:model="city">
                @error('city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="country" class="col-sm-2 col-form-label">Land</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('country')is-invalid @enderror"
                    id="country" wire:model="country">
                @error('country')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-12">
            {{-- @include('includes.form_error') --}}
            <button type="button" class="btn btn-sm btn-primary" wire:click="store"
                wire:loading.class="btn-secondary" wire:loading.attr="disabled">Opslaan</button>
        </div>
    </div>
</div>
