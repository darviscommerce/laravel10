<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.blog.list') }}">Nieuws</a></li>
            <li class="breadcrumb-item active" aria-current="page"><em>{!! $item->translation()['get']->title !!}</em> aanpassen</li>
        </ol>
    </nav>

    @include('livewire.blog.includes.blog-nav')


    <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">
        @if ($locale == 'nl')
            <div class="mb-3 row">
                <label for="show_from" class="col-sm-2 col-form-label">Tonen vanaf</label>
                <div class="col-sm-4">
                    <input type="datetime-local"
                        class="form-control form-control-sm @error('show_from')is-invalid @enderror" id="show_from"
                        wire:model="show_from">
                    @error('show_from')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <label for="show_till" class="col-sm-2 col-form-label">Tonen vanaf</label>
                <div class="col-sm-4">
                    <input type="datetime-local"
                        class="form-control form-control-sm @error('show_till')is-invalid @enderror" id="show_till"
                        wire:model="show_till">
                    @error('show_till')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        @endif

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
                @if ($item->locale != config('manta-cms.locale'))
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
                    <span class="error">{{ $message }}</span>
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
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->slug !!}</em>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="seo_title" class="col-sm-2 col-form-label">SEO Titel</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form-control-sm @error('seo_title')is-invalid @enderror"
                    id="seo_title" wire:model="seo_title">
                @error('seo_title')
                    <span class="error">{{ $message }}</span>
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
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->seo_description !!}</em>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tags" class="col-sm-2 col-form-label">Tags</label>
            <div class="col-sm-5">
                <textarea class="form-control form-control-sm @error('tags')is-invalid @enderror" id="tags" rows="7"
                    wire:model="tags" placeholder="Bijvoorbeeld: test,abc,doemaar"></textarea>
                @error('tags')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item && $locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->tags !!}</em>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="excerpt" class="col-sm-2 col-form-label">Excerpt/ inleiding</label>
            <div class="col-sm-5">
                <textarea class="form-control form-control-sm @error('excerpt')is-invalid @enderror" id="excerpt" rows="7"
                    wire:model="excerpt" placeholder="Schrijf hier een inleidende tekst"></textarea>
                @error('excerpt')
                    <span class="error">{{ $message }}</span>
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
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-5">
                @if ($item->locale != config('manta-cms.locale'))
                    <em>{!! $item->translation()['get']->content !!}</em>
                @endif
            </div>
        </div>
        <x-manta.component-tinymce name="content" />


        <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">
            <div class="mb-3 row">
                <div class="col-sm-12">
                    {{-- @include('includes.form_error') --}}
                    <input class="btn btn-sm btn-primary" type="submit" value="Opslaan"
                        wire:loading.class="btn-secondary" wire:loading.attr="disabled" />
                </div>
            </div>
        </form>
</div>
