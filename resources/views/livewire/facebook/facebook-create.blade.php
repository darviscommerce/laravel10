<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.facebook.list') }}">Dorper van 't jaar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toevoegen</li>
        </ol>
    </nav>
    <div class="mb-3 row">
        <label for="date" class="col-sm-2 col-form-label">Datum publicatie</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm @error('date')is-invalid @enderror" id="date"
                wire:model="date">
            @error('date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label for="year" class="col-sm-2 col-form-label">Jaar</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm @error('year')is-invalid @enderror" id="year"
                wire:model="year">
            @error('year')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="birthdate" class="col-sm-2 col-form-label">Geboortedatum</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm @error('birthdate')is-invalid @enderror"
                id="birthdate" wire:model="birthdate">
            @error('birthdate')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label for="date" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-4">

        </div>
    </div>
    <div class="mb-3 row">
        <label for="firstname" class="col-sm-2 col-form-label">Voornaam</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm @error('firstname')is-invalid @enderror"
                id="firstname" wire:model="firstname">
            @error('firstname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label for="lastname" class="col-sm-2 col-form-label">Achternaam</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm @error('lastname')is-invalid @enderror"
                id="lastname" wire:model="lastname">
            @error('lastname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
            <input type="email" class="form-control form-control-sm @error('email')is-invalid @enderror"
                id="email" wire:model="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label for="phone" class="col-sm-2 col-form-label">Telefoon</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm @error('phone')is-invalid @enderror"
                id="phone" wire:model="phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
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

        </div>
    </div>
    <div class="mb-3 row">
        <label for="slug" class="col-sm-2 col-form-label">Slug @if ($slug)
                <a href="{{ url($slug) }}" target="_blank"><i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
            @endif
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control form-control-sm @error('slug')is-invalid @enderror" id="slug"
                wire:model.defer="slug">
            @error('slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-5">

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

        </div>
    </div>
    <div class="mb-3 row">
        <label for="tags" class="col-sm-2 col-form-label">Tags</label>
        <div class="col-sm-5">
            <textarea class="form-control form-control-sm @error('tags')is-invalid @enderror" id="tags" rows="7"
                wire:model="tags" placeholder="Bijvoorbeeld: test,abc,doemaar"></textarea>
            @error('tags')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-5">

        </div>
    </div>
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

        </div>
    </div>
    <x-manta.component-tinymce name="content" />
    <div class="mb-3 row">
        <div class="col-sm-12">
            @include('includes.form_error')
            <button type="button" class="btn btn-sm btn-primary" wire:click="store"
                wire:loading.class="btn-secondary" wire:loading.attr="disabled">Opslaan</button>
        </div>
    </div>
</div>
