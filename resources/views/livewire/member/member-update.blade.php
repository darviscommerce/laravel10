<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.member.list') }}">Nieuwe leden</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span
                    class="fi fi-{{ $item->locale == 'en' ? 'gb' : $item->locale }}"></span>
                {{ $item->sex }}
                {{ $item->firstname }}
                {{ $item->lastname }} aanpassen</li>
        </ol>
    </nav>

    <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">
        {{-- <div class="mb-3 row">
            <label for="locale" class="col-sm-2 col-form-label">Taal</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm @error('locale')is-invalid @enderror" id="locale"
                    wire:model.defer="locale">
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
        </div> --}}
        {{-- <div class="mb-3 row">
            <label for="company" class="col-sm-2 col-form-label">Bedrijf</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('company')is-invalid @enderror"
                    id="company" wire:model.defer="company">
                @error('company')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div> --}}
        {{-- <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Aanspreektitel</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('title')is-invalid @enderror"
                    id="title" wire:model.defer="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="sex" class="col-sm-2 col-form-label">Geslacht</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('sex')is-invalid @enderror"
                    id="title" wire:model.defer="sex">
                @error('sex')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> --}}
        <div class="mb-3 row">
            <label for="firstname" class="col-sm-2 col-form-label">Voornaam</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('firstname')is-invalid @enderror"
                    id="firstname" wire:model.defer="firstname">
                @error('firstname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="lastname" class="col-sm-2 col-form-label">Achternaam</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('lastname')is-invalid @enderror"
                    id="lastname" wire:model.defer="lastname">
                @error('lastname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
                <input type="email" class="form-control form-control-sm @error('email')is-invalid @enderror"
                    id="email" wire:model.defer="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="phone" class="col-sm-2 col-form-label">Telefoon</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('phone')is-invalid @enderror"
                    id="phone" wire:model.defer="phone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="birthdate" class="col-sm-2 col-form-label">Geboortedatum</label>
            <div class="col-sm-4">
                <input type="date" class="form-control form-control-sm @error('birthdate')is-invalid @enderror"
                    id="birthdate" wire:model.defer="birthdate">
                @error('birthdate')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="address" class="col-sm-2 col-form-label">Adres</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('address')is-invalid @enderror"
                    id="address" wire:model.defer="address">
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
                    id="zipcode" wire:model.defer="zipcode">
                @error('zipcode')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="city" class="col-sm-2 col-form-label">Woonplaats</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('city')is-invalid @enderror"
                    id="city" wire:model.defer="city">
                @error('city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- <div class="mb-3 row">
            <label for="country" class="col-sm-2 col-form-label">Land</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('country')is-invalid @enderror"
                    id="country" wire:model.defer="country">
                @error('country')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div> --}}
        <div class="mb-3 row">
            <label for="iban" class="col-sm-2 col-form-label">IBAN</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('iban')is-invalid @enderror"
                    id="iban" wire:model.defer="iban">
                @error('iban')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="newsletters" class="col-sm-2 col-form-label">Nieuwsbrief ontvangen?</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm @error('newsletters')is-invalid @enderror"
                    id="newsletters" wire:model.defer="newsletters">
                    <option value="1">Ja</option>
                    <option value="0">Nee</option>
                </select>
                @error('newsletters')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div>
        {{-- <div class="mb-3 row">
            <label for="subject" class="col-sm-2 col-form-label">Onderwerp</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('subject')is-invalid @enderror"
                    id="subject" wire:model.defer="subject">
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div> --}}
        {{-- <div class="mb-3 row">
            <label for="comments" class="col-sm-2 col-form-label">Opmerkingen</label>
            <div class="col-sm-4">
                <textarea class="form-control form-control-sm @error('comments')is-invalid @enderror" rows="4" id="comments"
                    wire:model.defer="comments"></textarea>
                @error('comments')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="initials" class="col-sm-1 col-form-label"></label>
            <div class="col-sm-5">
            </div>
        </div> --}}
        <div class="mb-3 row">
            <div class="col-sm-12">
                {{-- @include('includes.form_error') --}}
                <input class="btn btn-primary" type="submit" value="Opslaan" wire:loading.class="btn-secondary"
                    wire:loading.attr="disabled" />
            </div>
        </div>
    </form>
</div>
