<div class="container">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Naam</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="name" wire:model="name">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Adres</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="address" wire:model="address">
            @error('address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="zipcode" class="col-sm-2 col-form-label">Postcode</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="zipcode" wire:model="zipcode">
            @error('zipcode')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <label for="residence" class="col-sm-2 col-form-label">Woonplaats</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="residence" wire:model="residence">
            @error('residence')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" id="email" wire:model="email">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="iban" class="col-sm-2 col-form-label">Rekeningnummer (IBAN)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="iban" wire:model="iban">
            @error('iban')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="confirm" id="confirm">
        <label class="form-check-label" for="confirm">
            Ik ga akkoord met de verwerking van persoonsgegevens door de vereniging zoals uiteengezet in de
            privacy-verklaring/ A.V.G.
        </label>
        @error('confirm')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="mt-3 mb-3 row">
        <div class="col-sm-12">
            <button class="btn btn-sm btn-primary">Lid worden</button>
        </div>
    </div>

</div>
