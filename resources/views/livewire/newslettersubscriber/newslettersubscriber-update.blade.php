<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.newsletter.subscriber.list') }}">Nieuwsbrief
                    inschrijvingen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Aanpassen</li>
        </ol>
    </nav>

    <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">
        <div class="mb-3 row">
            <label for="locale" class="col-sm-2 col-form-label">Taal</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm @error('locale')is-invalid @enderror" id="locale"
                    wire:model="locale">
                    <option value="nl">nl</option>
                    <option value="en">en</option>
                    <option value="de">de</option>
                    <option value="se">se</option>
                    <option value="es">es</option>
                </select>
                @error('locale')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
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
            <label for="phone" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-12">
                {{-- @include('includes.form_error') --}}
                <input class="btn btn-primary" type="submit" value="Opslaan" wire:loading.class="btn-secondary"
                    wire:loading.attr="disabled" />
            </div>
        </div>
    </form>
</div>
